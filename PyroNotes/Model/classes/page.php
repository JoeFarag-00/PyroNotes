<?php
require_once("journal.php");
class page{
    protected $id;
    protected $page_name;
    protected $page_content;
    function set_id($id)
    {
        $this->id=$id;
    }
    function get_id()
    {
        return $this->id;
    }
    function set_page_name($page_name)
    {
        $this->page_name;
    }
    function get_page_name()
    {
        return $this->page_name;
    }
    function set_page_content($page_content)
    {
        $this->page_content=$page_content;
    }
}