<?php
require_once("page.php");
class journal {
    protected $id;
    protected $journal_name;
    public $pages;
function __construct()
{
    $this->pages=array();
}
    function set_id($id)
    {
        $this->id=$id;
    }
    function get_id()
    {
        return $this->id;
    }
    function set_journal_name($journalname)
    {
        $this->journal_name=$journalname;
    }
    function get_journal_name()
    {
        return $this->journal_name;
    }
}