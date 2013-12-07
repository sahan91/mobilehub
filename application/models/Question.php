<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of QuestionModel
 *
 * @author DRX
 */
class Question extends MY_Model{
    const DB_TABLE = 'questions';
    const DB_TABLE_PK = 'questionId';
    
    public $questionId;
    public $questionTitle;
    public $questionDescription;
    public $askedUserId;
    public $answerCount;
    public $askedOn;
    public $netVotes;
    public $upVotes;
    public $downVotes;
    
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

        
}

?>
