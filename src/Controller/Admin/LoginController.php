<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;
use Cake\Http\Client;
use Cake\Mailer\Email;
use Cake\Datasource\ConnectionManager;

class LoginController extends AppController
{


public function index()
{
    $this->viewBuilder()->layout('login');
    $cookie_username = "";
    $cookie_password = "";
    if(isset($_COOKIE['cookie_username'])){
        $cookie_username = $_COOKIE['cookie_username'];
    }
    if(isset($_COOKIE['cookie_password'])){
        $cookie_password = $_COOKIE['cookie_password'];
    }    
    $this->set(compact('cookie_username','cookie_password'));    
    if(!empty($this->request->session()->read('ADMIN'))){
        return $this->redirect('/admin/dashboard');
    }         
    if ($this->request->is('post')){       
        $username = $this->request->data['username'];
        $password = md5($this->request->data['password']);
        $pass = $this->request->data['password'];  
        $userTable = TableRegistry::get('Users');              
        $query = $userTable->find()->select(['id','name','username','email','firstname','lastname','userright'])
        ->where(['username'=>$username,'password'=>$password])->order(['id'=>'ASC'])->first();  
        if(!empty($query)){
             $user['id'] = $query->id;
             $user['username'] = $query->username;
             $user['email'] = $query->email;
             $user['userright'] = $query->userright;           
             setcookie('cookie_username', $username, time() + (86400 * 30), "/"); // 86400 = 1 day
             setcookie('cookie_password', $pass, time() + (86400 * 30), "/"); // 86400 = 1 day           
             $this->request->session()->write('ADMIN',$user);                      
             return $this->redirect('/admin/dashboard');        
        } else {
             $this->Flash->error(__('Invalid username or password'));
        }  
    }           
}


public function logout()
{
      $this->request->session()->destroy('ADMIN');
      return $this->redirect('/admin');
}


}