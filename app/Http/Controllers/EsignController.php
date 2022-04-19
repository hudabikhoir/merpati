<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tjphippen\Docusign\Facades\Docusign;
use Storage;
use File;

class EsignController extends Controller
{
    public function getUser(){
        $user = Docusign::getUsers();
        return $user;
    }

    public function send(Request $request){
        $file = file_get_contents(storage_path('surat/docusign-sample.pdf'));
        // dd(base64_encode($file));
        $req = $request->all();
        
        $param = array(
            'emailSubject'   => 'Demo Envelope Subject', // Subject of email sent to all recipients
            'status'         => 'sent', // created = draft ('sent' will send the envelope!)
            'documents'      => array(
                [
                    'documentBase64' => base64_encode($file),
                    "fileExtension" => "pdf",
                    "documentId" => "1",
                    "name" => "Dokument kontrak",
                ],
            ),
            'recipients' => [
                "signers" => array(
                    [
                        'name'     => $req['signer_name'],
                        'email'    => $req['signer_email'],
                        'recipientId'  => 1,
                        'routingOrder' => '1',
                        'tab' => [
                            'signHereTabs' => array(
                                [
                                    'anchorString' => "**signature_1**",
                                    'anchorUnits' => 'pixels',
                                    'anchorYOffset' => '10',
                                    'anchorXOffset' => '20'
                                ],
                                [
                                    'anchorString' => "/sn1/",
                                    'anchorUnits' => 'pixels',
                                    'anchorYOffset' => '10',
                                    'anchorXOffset' => '20'
                                ]
                            )
                        ]
                    ],
                )
            ]);
        // dd(json_encode($param));
        $result = Docusign::createEnvelope($param);

        return $result;
    }

    public function envelopes(){
        $res = Docusign::getEnvelopeLists();

        return $res;
    }
}
