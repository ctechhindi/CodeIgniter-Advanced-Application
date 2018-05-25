<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| SetLayout (v0.0.3)
| -------------------------------------------------------------------
| With this class you can set the layout of a user or home page.
| In the layout, you can set the menu content such as the Page Header Menu and Footer.
|
| -------------------------------------------------------------------
| Any Module Controller
| -------------------------------------------------------------------
|  
    $this->load->library('Set_layout'); // and load in autoload file

    $this->set_layout->_home([
        'pageTitle'   => '',
        'pageContant' => 'login',
        'pageContantData' => ['data' => 'Other Model Data'],
        'metaData' => [
            'icon' => 'shortcut_icon',
            'title' => 'Title',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'author' => 'Author',
            'copyright' => 'Copyright',
            'image' => 'Image',
            'type' => 'Type',
            'url' => 'URL',
        ],
    ]);

| -------------------------------------------------------------------
| Create a new function and call this function in Controller 
| -------------------------------------------------------------------

    public function _home($set = null)
    {
        $this->_configLayout($set, [
            'pageHeader' => '../views/_home/header',
            'pageMenu'   => '../views/_home/nav',
            'pageFooter' => '../views/_home/footer',
        ]);
    }
    
*/

class Set_layout 
{

    public function __construct() {
        $this->CI =& get_instance();
        // load user agent library
        $this->CI->load->library('user_agent');
    }

    /**----------------------------------------------------------------------------
     * _configLayout :: System Function
     * @param: $set
     * @param: $options
     *-----------------------------------------------------------------*/
    private function _configLayout($set, $options = null)
    {
        // check $set in array and not empty
        if(is_array($set) AND !empty($set))
        {
            // html header default data
            $headerData = [
                'title' => '',
                'shortcut_icon' => $this->CI->lang->line("shortcut_icon"),
                'meta_title'    => $this->CI->lang->line("meta_title"),
                'meta_description' => $this->CI->lang->line("meta_description"),
                'meta_keywords' => $this->CI->lang->line("meta_keywords"),
                'meta_author'   => $this->CI->lang->line("meta_author"),
                'meta_copyright' => $this->CI->lang->line("meta_copyright"),
                'meta_image'    => $this->CI->lang->line("meta_image"),
                'meta_type'     => $this->CI->lang->line("meta_type"),
                'meta_url'      => $this->CI->lang->line("meta_url"),
            ];

            // page title exist
            if(isset($set['pageTitle']) AND !empty($set['pageTitle'])) {
                $headerData['title'] = $set['pageTitle'];
            }else {
                // load codeigniter helper
                $this->CI->load->helper('url');
                // call uri_string() function and set page title
                $headerData['title'] = uri_string();
            }

            // page meta tags exist
            if(isset($set['metaData']) AND !empty($set['metaData'])) {
                if(isset($set['metaData']['icon'])) {
                    $headerData['shortcut_icon'] = $set['metaData']['icon'];
                }

                if(isset($set['metaData']['title'])) {
                    $headerData['meta_title'] = $set['metaData']['title'];
                }

                if(isset($set['metaData']['description'])) {
                    $headerData['meta_description'] = $set['metaData']['description'];
                }

                if(isset($set['metaData']['keywords'])) {
                    $headerData['meta_keywords'] = $set['metaData']['keywords'];
                }

                if(isset($set['metaData']['author'])) {
                    $headerData['meta_author'] = $set['metaData']['author'];
                }
                
                if(isset($set['metaData']['copyright'])) {
                    $headerData['meta_copyright'] = $set['metaData']['copyright'];
                }

                if(isset($set['metaData']['image'])) {
                    $headerData['meta_image'] = $set['metaData']['image'];
                }

                if(isset($set['metaData']['type'])) {
                    $headerData['meta_type'] = $set['metaData']['type'];
                }

                if(isset($set['metaData']['url'])) {
                    $headerData['meta_url'] = $set['metaData']['url'];
                }
            }

            // page header
            if(isset($options['pageHeader']) AND !empty($options['pageHeader'])) {
                // load page header
                $this->CI->load->view($options['pageHeader'], $headerData);
            }
            
            // page menu
            if(isset($options['pageMenu']) AND !empty($options['pageMenu'])) {
                // load page navbar
                $this->CI->load->view($options['pageMenu']);
            }
            

            // load page main contant
            if(!empty($set['pageContant'])) {
                $this->CI->load->view($set['pageContant'], @$set['pageContantData']);
            }

            // page footer
            if(isset($options['pageFooter']) AND !empty($options['pageFooter'])) {
                // load page footer
                $this->CI->load->view($options['pageFooter']);
            }
            
        }else
        {
            // if $set is not array
            die('Please Set Page Contant and Page Title.(pageTitle,pageContant)');
        }
    }


    /**
     * set user define functions 
     */

    /**
     * Home Page Template Set
     * @param: contant- page main contant
     */
    public function _home($set = null)
    {
        $this->_configLayout($set, [
            'pageHeader' => '../Layout/Main/_home/header',
            'pageMenu'   => '../Layout/Main/_home/nav',
            'pageFooter' => '../Layout/Main/_home/footer',
        ]);
       
    }
}
