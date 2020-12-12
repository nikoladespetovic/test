<?php

namespace App\Controllers;

use App\Helpers;
use App\Logic\View;
use App\Models\Comments;

class CommentsController {
    public function index(): void {
        $jsScripts = ['comments'];
        $comments  = Comments::All();

        $view = new View('panelLayout', 'panel/comments');
        $view->assignVariable('comments', $comments);
        $view->assignVariable('jsScripts', $jsScripts);
    }

    public function store(): void {
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['text'])){

            try {
                $comment               = new Comments();
                $comment->name         = $_POST['name'];
                $comment->email        = $_POST['email'];
                $comment->text         = $_POST['text'];
                $comment->show_comment = 0;
                $comment->created_on   = date('Y-m-d H:i:s');
                $comment->save();

                echo json_encode(['message' => 'You have successfully left a comment']);
            } catch(\Exception $exception) {
                echo json_encode(['message' => "Error: {$exception}"]);
            }
        }
    }

    public function getRow(): void {
        if(Helpers::CheckPermission()){
            if(isset($_POST['id'])){
                $id      = $_POST['id'];
                $comment = Comments::find(['id' => $id]);

                echo json_encode([
                    'id'           => $comment->id,
                    'name'         => $comment->name,
                    'email'        => $comment->email,
                    'text'         => $comment->text,
                    'show_comment' => $comment->show_comment
                ]);
            }
        }
    }

    public function update(): void {
        if(Helpers::CheckPermission()){
            if(isset($_POST['id']) && isset($_POST['show_comment'])){
                $id           = $_POST['id'];
                $show_comment = $_POST['show_comment'];

                try {
                    $comment               = Comments::find(['id' => $id]);
                    $comment->show_comment = $show_comment;
                    $comment->save();

                    $_SESSION['success'] = 'Comment successfully updated';
                } catch(\Exception $exception) {
                    $_SESSION['error'] = 'Error: ' . $exception;
                }
                header('location: /comments');
            }
        }
    }
}