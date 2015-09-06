<?php
/*
*  2015 Lace Cart
*
*  @author LaceCart Dev <info@lacecart.com.ng>
*  @copyright  2015 LaceCart Team
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of LaceCart Team
*/

namespace LaceCart\Library;

class Utils
{
    static function exportCSV($headings=false, $rows=false, $filename=false)
    {
        # Ensure that we have data to be able to export the CSV
        if ((!empty($headings)) AND (!empty($rows)))
        {
            # modify the name somewhat
            $name = ($filename !== false) ? $filename . ".csv" : "export.csv";

            # Set the headers we need for this to work
            header('Content-Type: text/csv; charset=utf-8');
            header('Content-Disposition: attachment; filename=' . $name);

            # Start the ouput
            $output = fopen('php://output', 'w');

            # Create the headers
            fputcsv($output, $headings);

            # Then loop through the rows
            foreach($rows as $row)
            {
                # Add the rows to the body
                fputcsv($output, $row);
            }

            # Exit to close the stream off
            exit();
        }

        # Default to a failure
        return false;
    }
    
    static function convertDateToUnix($date)
    {
        //get all input parameters
        $date_array = date_parse_from_format("m-d-y", $date);
        
        return strtotime($date_array['year'] . '-' . $date_array['month'] . '-' . $date_array['day']);
    }
    
    /**
     *
     *@param string $number the amount you want to convert to kobo
     *@return string formatted string
     *
     */
    static function convertToNaira($number)
    {
        return number_format((float)($number/100), 2, '.', '');
    }
    
    /**
     *
     *@param string $number the amount you want to convert to kobo
     *@return string formatted string
     *
     */
    static function paginationHelper($paginate_obj, $base_url)
    {
        if(is_object($paginate_obj)) {
            $config['per_page'] = count($paginate_obj->items);
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['cur_tag_open'] = '<li class="active"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['first_link'] = 'First';
            $config['last_link'] = 'Last';
            $config['next_link'] = 'Next';
            $config['prev_link'] = 'Previous';
            $config['use_page_numbers'] = true;
            $config['num_links'] = 9;
            $config['cur_page'] = $paginate_obj->current;
            $config['base_url'] = $base_url;
            $config['total_rows'] = $paginate_obj->total_items;

            $pagination = new Pagination();

            $pagination->initialize($config);
            echo $pagination->create_links();
        }
    }

    /**
     * Build a select button from database
     *
     * @param sting $model
     * @param string $drop_down_key_field
     * @param string $drop_down_value_field
     * @param string $drop_down_opt_field
     * @param array $add_extra_fields
     *
     * @return mixed
     */
    static function build_dropdown_list($model, $drop_down_key_field, $drop_down_value_field, $drop_down_opt_field = '', $add_extra_fields = array())
    {
        $drop_down_list = [];
        $drop_down_list[''] = "--Select--";

        //if param is not null
        if(!empty($param)){
            $query = $model::findBy($param);
        } else {
            $query = $model::findAll();
        }

        if($query->hasRows()){
            foreach($query->rows() as $row)
            {
                if(strlen($drop_down_opt_field) > 0){
                    if(isset($row->$drop_down_opt_field)){
                        $drop_down_list[$row->$drop_down_key_field] = $row->$drop_down_value_field." ".$row->$drop_down_opt_field;
                    } else {
                        throw new \Exception('Optional field is not a column in the DB');
                    }
                }
                else
                    $drop_down_list[$row->$drop_down_key_field] = $row->$drop_down_value_field;
            }
        }

        asort($drop_down_list);

        if(count($add_extra_fields) > 0)
        {
            foreach($add_extra_fields as $key => $val)
            {
                if(!array_key_exists($key, $drop_down_list))
                    $drop_down_list[$key] = $val;
                else
                {
                    //throw "Extra field array key exist error";
                    throw new \Exception('Extra field array key exist error');
                }
            }
        }

       return $drop_down_list;
    }
    
}