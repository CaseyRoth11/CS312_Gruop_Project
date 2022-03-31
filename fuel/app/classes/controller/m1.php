<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.2
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */


class Controller_M1 extends Controller_Template
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
    public $template = 'm1_template';
    public $eid = '~croth97';

	public function action_index()
	{

        $this->template->title= 'Creative Colors LLC';
        $this->template->content= View::forge('m1/index');
        //add the data assignments for the default color page
        //put eid in quotes to make it work for you
        $this->template->eid=$this->eid;

    }

    public function action_about()
    {
        $this->template->title="About Creative Colors LLC";
        $this->template->content=View::forge('m1/about');
        $this->template->eid=$this->eid;

    }

    public function action_colorcoordinate()
    {
        $this->template->title="Color Coordinate";
        $this->template->eid=$this->eid;
        $this->template->content=Response::forge(View::forge('m1/ColorForm'));
    }

    public function post_colorcoordinate() 
    {
        $this->template->title="Color Coordinate";
        $this->template->eid=$this->eid;
        $tableSize = Input::post('tableSize');
        $numberColors = Input::post('numberColors');
        if((!is_numeric($tableSize)) || (!is_numeric($numberColors))) {
            $fail_view = View::forge('m1/failure');
            $data = array(
                "failure_view" => $fail_view
            );
            $this->template->content=Response::forge(View::forge('m1/ColorForm', $data));
        }
        elseif($tableSize < 1 || $numberColors < 1) {
            $fail_view = View::forge('m1/failure');
            $data = array(
                "failure_view" => $fail_view
            );
            $this->template->content=Response::forge(View::forge('m1/ColorForm', $data));
        }
        elseif($tableSize > 26 || $numberColors > 10) {
            $fail_view = View::forge('m1/failure2');
            $data = array(
                "failure_view" => $fail_view
            );
            $this->template->content=Response::forge(View::forge('m1/ColorForm', $data));
        }
        elseif($tableSize && $numberColors) {
            $data = array(
                "numberColors" => $numberColors,
                "tableSize" => $tableSize
            );
            $this->template->content=Response::forge(View::forge('m1/ColorTable', $data));
        }
    }
	
	public function post_colorcoordinatetable() {
        $this->template->title="Color Coordinate Table";
        $this->template->eid=$this->eid;
        $tableSize = Input::post('tableSize');
        $numberColors = Input::post('numberColors');
        $data = array(
            "numberColors" => $numberColors,
            "tableSize" => $tableSize,
            
        );
        $this->template->content=Response::forge(View::forge('m1/ColorTable', $data));
    }
}
