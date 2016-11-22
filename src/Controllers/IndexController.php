<?php

require_once 'AbstractBase.php';

class IndexController extends AbstractBase
{
    public function indexAction()
    {
        $this->addContext('buecher', holeBuecher($this->db));
    }

    public function zeigeAction()
    {
        // $this->addContext('buch', holeBuch($_GET['id']));
        $this->addContext('buch', holeBuch($this->db, $_GET['id']));
    }

    public function neuAction()
    {
        if ($_POST) {
            speichereBuch($_POST);
            header('Location: index.php');
            exit;
        }
    }

}
