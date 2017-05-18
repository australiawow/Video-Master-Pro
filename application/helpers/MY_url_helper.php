<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Assets URL
 *
 * @access	public
 * @param	string
 * @return	string
 */
if ( ! function_exists('assets_url'))
{
    function assets_url($uri = '')
    {
        $CI =& get_instance();

        $assets_url = $CI->config->item('assets_url');

        return $assets_url . trim($uri, '/');
    }
}

/**
 * CUSTOM UTC TIME
 *
 * @access	public
 * @param	int
 * @return	unix timestamp
 */
if ( ! function_exists('custom_utc_time'))
{
    function custom_utc_time($secs = 0)
    {
        $utc_str = gmdate("M d Y H:i:s", time()+$secs);
        $utc	 = strtotime($utc_str);

        return $utc;
    }
}

/**
 * CUSTOM STYLES GENERATOR
 *
 * @access	public
 * @param	int
 * @return	styles
 */
if ( ! function_exists('add_custom_styles'))
{
    function add_custom_styles($styles)
    {
    	$links = '';
    	
    	foreach ($styles as $style) {
    		$links .= '<link href="'.assets_url().$style.'.css?v='.time().'" rel="stylesheet">';
    	}
        

        return $links;
    }
}

/**
 * CUSTOM SCRIPTS GENERATOR
 *
 * @access	public
 * @param	int
 * @return	scripts
 */
if ( ! function_exists('add_custom_scripts'))
{
    function add_custom_scripts($scripts)
    {
    	$links = '';
    	
    	foreach ($scripts as $script) {
    		$links .= '<script src="'.assets_url().$script.'.js?v='.time().'"></script>';
    	}
        

        return $links;
    }
}

/* End of file MY_url_helper.php */
/* Location: ./application/helpers/MY_url_helper.php */