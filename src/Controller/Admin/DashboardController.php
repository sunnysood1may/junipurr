<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;
use Cake\Http\Client;
use Cake\Mailer\Email;
use Cake\Datasource\ConnectionManager;

class DashboardController extends AppController
{


public function index()
{
    $this->viewBuilder()->layout('admin');
}    

}