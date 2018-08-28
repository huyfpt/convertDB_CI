<?php
class Test extends MY_Controller {
    function minMax() {
        $minmax_mysql = $this->mysql->get('min_max');
        if (empty($minmax_mysql->row_array())) {
            $minmax_sqlsrv = $this->sqlsrv->get('min_max');
            $query = $minmax_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        // print_r($split);
                        $insert_row = $this->mysql->insert_batch('min_max', $split);
                    }
                    echo "min_max table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('min_max', $query);
                    echo "min_max table inserted > 100";
                    echo "\n";
                }
              } else {
                  echo '<strong>'."table min_max sql is null nothing values to insert".'</strong>';
                  echo "\n";
              }  
        } else {
            echo "min_max table has been inserted values";
            echo "\n";
        }
    }

    function mediables() {
        $mediable_mysql = $this->mysql->get('mediables');
        if (empty($mediable_mysql->row_array())) {
            $mediable_sqlsrv = $this->sqlsrv->get('mediables');
            $query = $mediable_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        // print_r($split);
                        $insert_row = $this->mysql->insert_batch('mediables', $split);
                    }
                    echo "mediables table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('mediables', $query);
                    echo "mediables table inserted > 100";
                    echo "\n";
                }
              } else {
                  echo '<strong>'."table mediables sql is null nothing values to insert".'</strong>';
                  echo "\n";
              }  
        } else {
            echo "mediables table has been inserted values";
            echo "\n";
        }
    }

    function media() {
        $media_mysql = $this->mysql->get('media');
        if (empty($media_mysql->row_array())) {
            $media_sqlsrv = $this->sqlsrv->get('media');
            $query = $media_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        // print_r($split);
                        $insert_row = $this->mysql->insert_batch('media', $split);
                    }
                    echo "media table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('media', $query);
                    echo "media table inserted > 100";
                    echo "\n";
                }
              } else {
                  echo '<strong>'."table media sql is null nothing values to insert".'</strong>';
                  echo "\n";
              }  
        } else {
            echo "media table has been inserted values";
            echo "\n";
        }
    }

    function logging() {
        $logging_mysql = $this->mysql->get('logging');
        if (empty($logging_mysql->row_array())) {
            $logging_sqlsrv = $this->sqlsrv->get('logging');
            $query = $logging_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('logging', $split);
                    }
                    echo "logging table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('logging', $query);
                    echo "logging table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table logging sql is null nothing values to insert".'</strong>';
                echo "\n";
            }  
        } else {
            echo "logging table has been inserted values";
            echo "\n";
        }
    }

    function color_palette() {
        $color_pale_mysql = $this->mysql->get('color_palette');
        if (empty($color_pale_mysql->row_array())) {
            $color_pale_sqlsrv = $this->sqlsrv->get('color_palette');
            $query = $color_pale_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('color_palette', $split);
                    }
                    echo "color_palette table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('color_palette', $query);
                    echo "color_palette table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table color_palette sql is null nothing values to insert".'</strong>';
                echo "\n";
            }  
        } else {
            echo "color_palette table has been inserted values";
            echo "\n";
        }
    }

    function shape() {
        $shape_mysql = $this->mysql->get('shape');
        if (empty($shape_mysql->row_array())) {
            $shape_sqlsrv = $this->sqlsrv->get('shape');
            $query = $shape_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('shape', $split);
                    }
                    echo "shape table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('shape', $query);
                    echo "shape table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table shape sql is null nothing values to insert".'</strong>';
                echo "\n";
            }  
        } else {
            echo "shape table has been inserted values";
            echo "\n";
        }
    }

    function cooling_family() {
        $cooling_family_mysql = $this->mysql->get('cooling_family');
        if (empty($cooling_family_mysql->row_array())) {
            $cooling_family_sqlsrv = $this->sqlsrv->get('cooling_family');
            $query = $cooling_family_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('cooling_family', $split);
                    }
                    echo "cooling_family table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('cooling_family', $query);
                    echo "cooling_family table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table cooling_family sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "cooling_family table has been inserted values";
            echo "\n";
        }
    }

    function equipfamily() {
        $equipfamily_mysql = $this->mysql->get('equipfamily');
        if (empty($equipfamily_mysql->row_array())) {
            $equipfamily_sqlsrv = $this->sqlsrv->get('equipfamily');
            $query = $equipfamily_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('equipfamily', $split);
                    }
                    echo "equipfamily table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('equipfamily', $query);
                    echo "equipfamily table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table equipfamily sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "equipfamily table has been inserted values";
            echo "\n";
        }
    }
    
    function ln2user() {
        $user_mysql = $this->mysql->get('ln2user');
        if (empty($user_mysql->row_array())) {
            $user_sqlsrv = $this->sqlsrv->get('ln2user');
            $query = $user_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('ln2user', $split);
                    }
                    echo "ln2user table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('ln2user', $query);
                    echo "ln2user table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table ln2user sql is null nothing values to insert".'</strong>';
                echo "\n";
            }  
        } else {
            echo "ln2user table has been inserted values";
            echo "\n";
        }
    }

    function calc_ParamDef() {
        $caldef_mysql = $this->mysql->get('calculation_parameters_def');
        if (empty($caldef_mysql->row_array())) {
            $caldef_sqlsrv = $this->sqlsrv->get('calculation_parameters_def');
            $query = $caldef_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('calculation_parameters_def', $split);
                    }
                    echo "calculation_parameters_def table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('calculation_parameters_def', $query);
                    echo "calculation_parameters_def table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table calculation_parameters_def sql is null nothing values to insert".'</strong>';
                echo "\n";
            }  
        } else {
            echo "calculation_parameters_def table has been inserted values";
            echo "\n";
        }
    }
    function temp_Record_Pts_Def() {
        $tempdef_mysql = $this->mysql->get('temp_record_pts_def');
        if (empty($tempdef_mysql->row_array())) {
            $tempdef_sqlsrv = $this->sqlsrv->get('temp_record_pts_def');
            $query = $tempdef_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('temp_record_pts_def', $split);
                    }
                    echo "temp_record_pts_def table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('temp_record_pts_def', $query);
                    echo "temp_record_pts_def table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table temp_record_pts_def sql is null nothing values to insert".'</strong>';
                echo "\n";
            }  
        } else {
            echo "temp_record_pts_def table has been inserted values";
            echo "\n";
        }
    }
    
    function mesh_param_def() {
        $meshDef_mysql = $this->mysql->get('mesh_param_def');
        if (empty($meshDef_mysql->row_array())) {
            $meshDef_sqlsrv = $this->sqlsrv->get('mesh_param_def');
            $query = $meshDef_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('mesh_param_def', $split);
                    }
                    echo "mesh_param_def table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('mesh_param_def', $query);
                    echo "mesh_param_def table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table mesh_param_def sql is null nothing values to insert".'</strong>';
                echo "\n";
            }  
        } else {
            echo "mesh_param_def table has been inserted values";
            echo "\n";
        }
    }

    function monetaryCurrent() {
        $money_mysql = $this->mysql->get('monetary_currency');
        if (empty($money_mysql->row_array())) {
            $money_sqlsrv = $this->sqlsrv->get('monetary_currency');
            $query = $money_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('monetary_currency', $split);
                    }
                    echo "monetary_currency table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('monetary_currency', $query);
                    echo "monetary_currency table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table monetary_currency sql is null nothing values to insert".'</strong>';
                echo "\n";
            }  
        } else {
            echo "monetary_currency table has been inserted values";
            echo "\n";
        }
    }

    function language() {
        $lang_mysql = $this->mysql->get('language');
        if (empty($lang_mysql->row_array())) {
            $lang_sqlsrv = $this->sqlsrv->get('language');
            $query = $lang_sqlsrv->result();
            if (!empty($query)) {
                $insert_row = $this->mysql->insert_batch('language', $query);
                echo "language table inserted > 100";
                echo "\n";
            } else {
                echo '<strong>'."table language sql is null nothing values to insert".'</strong>';
                echo "\n";
            }  
        } else {
            echo "language table has been inserted values";
            echo "\n";
        }
    }

    function packing_elmt() {
        $packing_elmt_mysql = $this->mysql->get('packing_elmt',10, 0);
        if (empty($packing_elmt_mysql->row_array())) {
            $packing_elmt_sqlsrv = $this->sqlsrv->get('packing_elmt');
            $query = $packing_elmt_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('packing_elmt', $split);
                    }
                    echo "packing_elmt table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('packing_elmt', $query);
                    echo "packing_elmt table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table packing_elmt sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "packing_elmt table has been inserted values";
            echo "\n";
        }
    }

    function component() {
        $component_mysql = $this->mysql->get('component',10, 0);
        if (empty($component_mysql->row_array())) {
            $component_sqlsrv = $this->sqlsrv->get('component');
            $query = $component_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('component', $split);
                    }
                    echo "component table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('component', $query);
                    echo "component table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table component sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "component table has been inserted values";
            echo "\n";
        }
    }

    function compenth() {
        $compenth_mysql = $this->mysql->get('compenth',10, 0);
        if (empty($compenth_mysql->row_array())) {
            $compenth_sqlsrv = $this->sqlsrv->get('compenth');
            $query = $compenth_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('compenth', $split);
                    }
                    echo "compenth table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('compenth', $query);
                    echo "compenth table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table compenth sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "compenth table has been inserted values";
            echo "\n";
        }
    }

    function error_txt() {
        $errtxt_mysql = $this->mysql->get('error_txt');
        if (empty($errtxt_mysql->row_array())) {
            $errtxt_sqlsrv = $this->sqlsrv->get('error_txt');
            $query = $errtxt_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('error_txt', $split);
                    }
                    echo "error_txt table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('error_txt', $query);
                    echo "error_txt table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table error_txt sql is null nothing values to insert".'</strong>';
                echo "\n";
            }  
        } else {
            echo "error_txt table has been inserted values";
            echo "\n";
        }
    }

    function translation() {
        $trans_mysql = $this->mysql->get('translation');
        if (empty($trans_mysql->row_array())) {
            $trans_sqlsrv = $this->sqlsrv->get('translation');
            $query = $trans_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('translation', $split);
                    }
                    echo "translation table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('translation', $query);
                    echo "translation table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table translation sql is null nothing values to insert".'</strong>';
                echo "\n";
            }  
        } else {
            echo "translation table has been inserted values";
            echo "\n";
        }
    }

    function connection() {
        $connection_mysql = $this->mysql->get('connection');
        if (empty($connection_mysql->row_array())) {
            $connection_sqlsrv = $this->sqlsrv->get('connection');
            $query = $connection_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('connection', $split);
                    }
                    echo "connection table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('connection', $query);
                    echo "connection table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table connection sql is null nothing values to insert".'</strong>';
                echo "\n";
            }  
        } else {
            echo "connection table has been inserted values";
            echo "\n";
        }
    }

    function user_unit() {
        $userUnit_mysql = $this->mysql->get('user_unit');
        if (empty($userUnit_mysql->row_array())) {
            $userUnit_sqlsrv = $this->sqlsrv->get('user_unit');
            $query = $userUnit_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('user_unit', $split);
                    }
                    echo "user_unit table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('user_unit', $query);
                    echo "user_unit table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table user_unit sql is null nothing values to insert".'</strong>';
                echo "\n";
            }  
        } else {
            echo "user_unit table has been inserted values";
            echo "\n";
        }
    }

    function unit() {
        $unit_mysql = $this->mysql->get('unit');
        if (empty($unit_mysql->row_array())) {
            $unit_sqlsrv = $this->sqlsrv->get('unit');
            $query = $unit_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('unit', $split);
                    }
                    echo "unit table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('unit', $query);
                    echo "unit table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table unit sql is null nothing values to insert".'</strong>';
                echo "\n";
            }  
        } else {
            echo "unit table has been inserted values";
            echo "\n";
        }
    }

    
    function prodchar_colors_def() {
        $prodChar_colr_mysql = $this->mysql->get('prodchar_colors_def');
        if (empty($prodChar_colr_mysql->row_array())) {
            $prodChar_colr_sqlsrv = $this->sqlsrv->get('prodchar_colors_def');
            $query = $prodChar_colr_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('prodchar_colors_def', $split);
                    }
                    echo "prodchar_colors_def table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('prodchar_colors_def', $query);
                    echo "prodchar_colors_def table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table prodchar_colors_def sql is null nothing values to insert".'</strong>';
                echo "\n";
            }  
        } else {
            echo "prodchar_colors_def table has been inserted values";
            echo "\n";
        }
    }

    function studies() {
        $stu_mysql = $this->mysql->get('studies');
        if (empty($stu_mysql->row_array())) {
            $stu_sqlsrv = $this->sqlsrv->get('studies');
            $query = $stu_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('studies', $split);
                    }
                    echo "studies table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('studies', $query);
                    echo "studies table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table studies sql is null nothing values to insert".'</strong>';
                echo "\n";
            }  
        } else {
            echo "studies table has been inserted values";
            echo "\n";
        }
    }

    function production() {
        $stu_mysql = $this->mysql->get('production');
        if (empty($stu_mysql->row_array())) {
            $stu_sqlsrv = $this->sqlsrv->get('production');
            $query = $stu_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('production', $split);
                    }
                    echo "production table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('production', $query);
                    echo "production table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table production sql is null nothing values to insert".'</strong>';
                echo "\n";
            }  
        } else {
            echo "production table has been inserted values";
            echo "\n";
        }
    }

    function initial_temperature() {
        $stu_mysql = $this->mysql->get('initial_temperature');
        if (empty($stu_mysql->row_array())) {
            $stu_sqlsrv = $this->sqlsrv->get('initial_temperature');
            $query = $stu_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('initial_temperature', $split);
                    }
                    echo "initial_temperature table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('initial_temperature', $query);
                    echo "initial_temperature table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table initial_temperature sql is null nothing values to insert".'</strong>';
                echo "\n";
            }  
        } else {
            echo "initial_temperature table has been inserted values";
            echo "\n";
        }
    }

    function product() {
        $stu_mysql = $this->mysql->get('product');
        if (empty($stu_mysql->row_array())) {
            $stu_sqlsrv = $this->sqlsrv->get('product');
            $query = $stu_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('product', $split);
                    }
                    echo "product table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('product', $query);
                    echo "product table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table product sql is null nothing values to insert".'</strong>';
                echo "\n";
            }  
        } else {
            echo "product table has been inserted values";
            echo "\n";
        }
    }

    function mesh_generation() {
        $stu_mysql = $this->mysql->get('mesh_generation');
        if (empty($stu_mysql->row_array())) {
            $stu_sqlsrv = $this->sqlsrv->get('mesh_generation');
            $query = $stu_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('mesh_generation', $split);
                    }
                    echo "mesh_generation table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('mesh_generation', $query);
                    echo "mesh_generation table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table mesh_generation sql is null nothing values to insert".'</strong>';
                echo "\n";
            }  
        } else {
            echo "mesh_generation table has been inserted values";
            echo "\n";
        }
    }

    function prodchar_colors() {
        $stu_mysql = $this->mysql->get('prodchar_colors');
        if (empty($stu_mysql->row_array())) {
            $stu_sqlsrv = $this->sqlsrv->get('prodchar_colors');
            $query = $stu_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('prodchar_colors', $split);
                    }
                    echo "prodchar_colors table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('prodchar_colors', $query);
                    echo "prodchar_colors table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table prodchar_colors sql is null nothing values to insert".'</strong>';
                echo "\n";
            }  
        } else {
            echo "prodchar_colors table has been inserted values";
            echo "\n";
        }
    }

    function product_elmt() {
        $stu_mysql = $this->mysql->get('product_elmt');
        if (empty($stu_mysql->row_array())) {
            $stu_sqlsrv = $this->sqlsrv->get('product_elmt');
            $query = $stu_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('product_elmt', $split);
                    }
                    echo "product_elmt table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('product_elmt', $query);
                    echo "product_elmt table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table product_elmt sql is null nothing values to insert".'</strong>';
                echo "\n";
            }  
        } else {
            echo "product_elmt table has been inserted values";
            echo "\n";
        }
    }

    function mesh_position() {
        $stu_mysql = $this->mysql->get('mesh_position');
        if (empty($stu_mysql->row_array())) {
            $stu_sqlsrv = $this->sqlsrv->get('mesh_position');
            $query = $stu_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('mesh_position', $split);
                    }
                    echo "mesh_position table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('mesh_position', $query);
                    echo "mesh_position table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table mesh_position sql is null nothing values to insert".'</strong>';
                echo "\n";
            }  
        } else {
            echo "mesh_position table has been inserted values";
            echo "\n";
        }
    }

    function packing() {
        $stu_mysql = $this->mysql->get('packing');
        if (empty($stu_mysql->row_array())) {
            $stu_sqlsrv = $this->sqlsrv->get('packing');
            $query = $stu_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('packing', $split);
                    }
                    echo "packing table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('packing', $query);
                    echo "packing table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table packing sql is null nothing values to insert".'</strong>';
                echo "\n";
            }  
        } else {
            echo "packing table has been inserted values";
            echo "\n";
        }
    }

    function packing_layer() {
        $stu_mysql = $this->mysql->get('packing_layer');
        if (empty($stu_mysql->row_array())) {
            $stu_sqlsrv = $this->sqlsrv->get('packing_layer');
            $query = $stu_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('packing_layer', $split);
                    }
                    echo "packing_layer table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('packing_layer', $query);
                    echo "packing_layer table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table packing_layer sql is null nothing values to insert".'</strong>';
                echo "\n";
            }  
        } else {
            echo "packing_layer table has been inserted values";
            echo "\n";
        }
    }
    
    function haverage_results() {
        $haverageres_mysql = $this->mysql->get('haverage_results');
        if (empty($haverageres_mysql->row_array())) {
            $haverageres_sqlsrv = $this->sqlsrv->get('haverage_results');
            $query = $haverageres_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('haverage_results', $split);
                    }
                    echo "haverage_results table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('haverage_results', $query);
                    echo "haverage_results table inserted < 100";
                    echo "\n";
                }
                echo $insert_row;
            } else {
                echo '<strong>'."table haverage_results sql is null nothing values to insert".'</strong>'.'</strong>';
                echo "\n";
            }
        } else {
            echo "haverage_results table has been inserted values";
            echo "\n";
        }
    }
    
    function precalc_ldg_rate_prm() {
        $precal_pram_mysql = $this->mysql->get('precalc_ldg_rate_prm');
        if (empty($precal_pram_mysql->row_array())) {
            $precal_pram_sqlsrv = $this->sqlsrv->get('precalc_ldg_rate_prm');
            $query = $precal_pram_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('precalc_ldg_rate_prm', $split);
                    }
                    echo "precalc_ldg_rate_prm table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('precalc_ldg_rate_prm', $query);
                    echo "precalc_ldg_rate_prm table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table precalc_ldg_rate_prm sql is null nothing values to insert".'</strong>';
                echo "\n";
            }  
        } else {
            echo "precalc_ldg_rate_prm table has been inserted values";
            echo "\n";
        }
    }
    
    function prices() {
        $price_mysql = $this->mysql->get('prices');
        if (empty($price_mysql->row_array())) {
            $price_sqlsrv = $this->sqlsrv->get('prices');
            $query = $price_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('prices', $split);
                    }
                    echo "prices table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('prices', $query);
                    echo "prices table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table prices sql is null nothing values to insert".'</strong>'.'</strong>';
                echo "\n";
            }  
        } else {
            echo "prices table has been inserted values";
            echo "\n";
        }
    }
    
    function study_results() {
        $haverageres_mysql = $this->mysql->get('study_results');
        if (empty($haverageres_mysql->row_array())) {
            $haverageres_sqlsrv = $this->sqlsrv->get('study_results');
            $query = $haverageres_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('study_results', $split);
                    }
                    echo "prices table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('study_results', $query);
                    echo "study_results table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table study_results sql is null nothing values to insert".'</strong>'.'</strong>';
                echo "\n";
            }
        } else {
            echo "study_results table has been inserted values";
            echo "\n";
        }
    }

    function temp_record_pts() {
        $temp_rec_mysql = $this->mysql->get('temp_record_pts');
        if (empty($temp_rec_mysql->row_array())) {
            $temp_rec_sqlsrv = $this->sqlsrv->get('temp_record_pts');
            $query = $temp_rec_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('temp_record_pts', $split);
                    }
                    echo "temp_record_pts table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('temp_record_pts', $query);
                    echo "temp_record_pts table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table temp_record_pts sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "temp_record_pts table has been inserted values";
            echo "\n";
        }
    }
    
    function report() {
        $report_mysql = $this->mysql->get('report');
        if (empty($report_mysql->row_array())) {
            $report_sqlsrv = $this->sqlsrv->get('report');
            $query = $report_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('report', $split);
                    }
                    echo "report table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('report', $query);
                    echo "report table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table report sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "report table has been inserted values";
            echo "\n";
        }
    }

    // define('ENCRYPT_KEY', '3a786565707472');
    function equipment() {
        $equip_mysql = $this->mysql->get('equipment');
        if (empty($equip_mysql->row_array())) {
            $equip_sqlsrv = $this->sqlsrv->query("(select *, 
            convert(varchar(100), DecryptByPassPhrase('3a786565707472', DLL_IDX)) as DLL_IDX, 
            convert(varchar(100), DecryptByPassPhrase('3a786565707472', FATHER_DLL_IDX)) as FATHER_DLL_IDX 
            from EQUIPMENT)");
            $query = $equip_sqlsrv->result();
            print_r($query);
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('equipment', $split);
                    }
                    echo "equipment table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('equipment', $query);
                    echo "min_max table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table equipment sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "equipment table has been inserted values";
            echo "\n";
        }
    }

    function consumptions() {
        $consum_mysql = $this->mysql->get('consumptions');
        if (empty($consum_mysql->row_array())) {
            $consum_sqlsrv = $this->sqlsrv->query("(select *,
            CONVERT( float(53), convert(varchar(100), DecryptByPassPhrase('3a786565707472', TEMPERATURE))) as TEMPERATURE,
            CONVERT( float(53), convert(varchar(100), DecryptByPassPhrase('3a786565707472', CONSUMPTION_PERM))) as CONSUMPTION_PERM,
            CONVERT( float(53), convert(varchar(100), DecryptByPassPhrase('3a786565707472', CONSUMPTION_GETCOLD))) as CONSUMPTION_GETCOLD
            from consumptions)");
            $query = $consum_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('consumptions', $split);
                    }
                    echo "consumptions table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('consumptions', $query);
                    echo "consumptions table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table consumptions sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "consumptions table has been inserted values";
            echo "\n";
        }
    }

    function equip_generation() {
        $equip_gen_mysql = $this->mysql->get('equip_generation');
        if (empty($equip_gen_mysql->row_array())) {
            $equip_gen_sqlsrv = $this->sqlsrv->get('equip_generation');
            $query = $equip_gen_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('equip_generation', $split);
                    }
                    echo "equip_generation table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('equip_generation', $query);
                    echo "equip_generation table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table equip_generation sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "equip_generation table has been inserted values";
            echo "\n";
        }
    }
    
    function equip_gen_zone() {
        $equip_gen_zone_mysql = $this->mysql->get('equip_gen_zone');
        if (empty($equip_gen_zone_mysql->row_array())) {
            $equip_gen_zone_sqlsrv = $this->sqlsrv->get('equip_gen_zone');
            $query = $equip_gen_zone_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('equip_gen_zone', $split);
                    }
                    echo "equip_gen_zone table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('equip_gen_zone', $query);
                    echo "equip_gen_zone table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table equip_gen_zone sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "equip_gen_zone table has been inserted values";
            echo "\n";
        }
    }

    function equipcharact() {
        $equipcharact_mysql = $this->mysql->get('equipcharact');
        if (empty($equipcharact_mysql->row_array())) {
            $equipcharact_sqlsrv = $this->sqlsrv->get('equipcharact');
            $query = $equipcharact_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('equipcharact', $split);
                    }
                    echo "equipcharact table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('equipcharact', $query);
                    echo "equipcharact table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table equipcharact sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "equipcharact table has been inserted values";
            echo "\n";
        }
    }

    function equip_zone() {
        $equip_zone_mysql = $this->mysql->get('equip_zone');
        if (empty($equip_zone_mysql->row_array())) {
            $equip_zone_sqlsrv = $this->sqlsrv->get('equip_zone');
            $query = $equip_zone_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('equip_zone', $split);
                    }
                    echo "equip_zone table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('equip_zone', $query);
                    echo "equip_zone table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table equip_zone sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "equip_zone table has been inserted values";
            echo "\n";
        }
    }

    function equipseries() {
        $equipseries_mysql = $this->mysql->get('equipseries');
        if (empty($equipseries_mysql->row_array())) {
            $equipseries_sqlsrv = $this->sqlsrv->get('equipseries');
            $query = $equipseries_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('equipseries', $split);
                    }
                    echo "equipseries table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('equipseries', $query);
                    echo "equipseries table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table equipseries sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "equipseries table has been inserted values";
            echo "\n";
        }
    }

    function temp_ext() {
        $temp_ext_mysql = $this->mysql->get('temp_ext');
        if (empty($temp_ext_mysql->row_array())) {
            $temp_ext_sqlsrv = $this->sqlsrv->get('temp_ext');
            $query = $temp_ext_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('temp_ext', $split);
                    }
                    echo "temp_ext table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('temp_ext', $query);
                    echo "temp_ext table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table temp_ext sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "temp_ext table has been inserted values";
            echo "\n";
        }
    }

    function precalc_ldg_rate() {
        $precalc_ldg_rate_mysql = $this->mysql->get('precalc_ldg_rate');
        if (empty($precalc_ldg_rate_mysql->row_array())) {
            $precalc_ldg_rate_sqlsrv = $this->sqlsrv->get('precalc_ldg_rate');
            $query = $precalc_ldg_rate_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('precalc_ldg_rate', $split);
                    }
                    echo "precalc_ldg_rate table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('precalc_ldg_rate', $query);
                    echo "precalc_ldg_rate table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table precalc_ldg_rate sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "precalc_ldg_rate table has been inserted values";
            echo "\n";
        }
    }

    function ramps() {
        $ramps_mysql = $this->mysql->get('ramps');
        if (empty($ramps_mysql->row_array())) {
            $ramps_sqlsrv = $this->sqlsrv->get('ramps');
            $query = $ramps_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('ramps', $split);
                    }
                    echo "ramps table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('ramps', $query);
                    echo "ramps table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table ramps sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "ramps table has been inserted values";
            echo "\n";
        }
    }

    function shelves() {
        $shelves_mysql = $this->mysql->get('shelves');
        if (empty($shelves_mysql->row_array())) {
            $shelves_sqlsrv = $this->sqlsrv->get('shelves');
            $query = $shelves_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('shelves', $split);
                    }
                    echo "shelves table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('shelves', $query);
                    echo "shelves table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table shelves sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "shelves table has been inserted values";
            echo "\n";
        }
    }

    function load_losses() {
        $load_losses_mysql = $this->mysql->get('load_losses');
        if (empty($load_losses_mysql->row_array())) {
            $load_losses_sqlsrv = $this->sqlsrv->get('load_losses');
            $query = $load_losses_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('load_losses', $split);
                    }
                    echo "load_losses table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('load_losses', $query);
                    echo "load_losses table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table load_losses sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "load_losses table has been inserted values";
            echo "\n";
        }
    }

    function line_elmt() {
        $line_elmt_mysql = $this->mysql->get('line_elmt');
        if (empty($line_elmt_mysql->row_array())) {
            $line_elmt_sqlsrv = $this->sqlsrv->get('line_elmt');
            $query = $line_elmt_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('line_elmt', $split);
                    }
                    echo "line_elmt table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('line_elmt', $query);
                    echo "line_elmt table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table line_elmt sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "line_elmt table has been inserted values";
            echo "\n";
        }
    }

    function study_equipments() {
        $study_equipments_mysql = $this->mysql->get('study_equipments');
        if (empty($study_equipments_mysql->row_array())) {
            $study_equipments_sqlsrv = $this->sqlsrv->get('study_equipments');
            $query = $study_equipments_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('study_equipments', $split);
                    }
                    echo "study_equipments table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('study_equipments', $query);
                    echo "study_equipments table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table study_equipments sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "study_equipments table has been inserted values";
            echo "\n";
        }
    }

    function dima_results() {
        $dima_results_mysql = $this->mysql->get('dima_results');
        if (empty($dima_results_mysql->row_array())) {
            $dima_results_sqlsrv = $this->sqlsrv->get('dima_results');
            $query = $dima_results_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    // $splits = array_chunk($query,100);
                    foreach ($query as $q) {
                        $data = ['ID_DIMA_RESULT' => $q->ID_DIMA_RESULTS,
                                'ID_STUDY_EQUIPMENTS' => $q->ID_STUDY_EQUIPMENTS,       
                                'SETPOINT' => $q->SETPOINT,
                                'USERATE' => $q->USERATE,    
                                'USERATEMAX' => $q->USERATEMAX,       
                                'HOURLYOUTPUTMAX' => $q->HOURLYOUTPUTMAX,       
                                'DIMA_VEP' => $q->DIMA_VEP,       
                                'DIMA_VC' => $q->DIMA_VC,       
                                'DIMA_TYPE' => $q->DIMA_TYPE,       
                                'DIMA_TS' => $q->DIMA_TS,       
                                'DIMA_TFP' => $q->DIMA_TFP,       
                                'DIMA_STATUS' => $q->DIMA_STATUS,       
                                'DIMA_PRECIS' => $q->DIMA_PRECIS,      
                                'CRYOCONSPROD' => $q->CRYOCONSPROD,       
                                'CONSUMMAX' => $q->CONSUMMAX,       
                                'CONSUM' => $q->CONSUM       
                    ];
                        $insert_row = $this->mysql->insert('dima_results', $data);
                    }
                    echo "dima_results table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('dima_results', $query);
                    echo "dima_results table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table dima_results sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "dima_results table has been inserted values";
            echo "\n";
        }
    }

    function eco_res_eqp() {
        $eco_res_eqp_mysql = $this->mysql->get('eco_res_eqp');
        if (empty($eco_res_eqp_mysql->row_array())) {
            $eco_res_eqp_sqlsrv = $this->sqlsrv->get('eco_res_eqp');
            $query = $eco_res_eqp_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('eco_res_eqp', $split);
                    }
                    echo "eco_res_eqp table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('eco_res_eqp', $query);
                    echo "eco_res_eqp table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table eco_res_eqp sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "eco_res_eqp table has been inserted values";
            echo "\n";
        }
    }

    function economic_results() {
        $economic_results_mysql = $this->mysql->get('economic_results');
        if (empty($economic_results_mysql->row_array())) {
            $economic_results_sqlsrv = $this->sqlsrv->get('economic_results');
            $query = $economic_results_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('economic_results', $split);
                    }
                    echo "economic_results table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('economic_results', $query);
                    echo "economic_results table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table economic_results sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "economic_results table has been inserted values";
            echo "\n";
        }
    }

    function exh_gen() {
        $exh_gen_mysql = $this->mysql->get('exh_gen');
        if (empty($exh_gen_mysql->row_array())) {
            $exh_gen_sqlsrv = $this->sqlsrv->get('exh_gen');
            $query = $exh_gen_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('exh_gen', $split);
                    }
                    echo "exh_gen table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('exh_gen', $query);
                    echo "exh_gen table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table exh_gen sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "exh_gen table has been inserted values";
            echo "\n";
        }
    }

    function exh_res() {
        $exh_res_mysql = $this->mysql->get('exh_res');
        if (empty($exh_res_mysql->row_array())) {
            $exh_res_sqlsrv = $this->sqlsrv->get('exh_res');
            $query = $exh_res_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('exh_res', $split);
                    }
                    echo "exh_res table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('exh_res', $query);
                    echo "exh_res table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table exh_res sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "exh_res table has been inserted values";
            echo "\n";
        }
    }

    function layout_generation() {
        $layout_generation_mysql = $this->mysql->get('layout_generation');
        if (empty($layout_generation_mysql->row_array())) {
            $layout_generation_sqlsrv = $this->sqlsrv->get('layout_generation');
            $query = $layout_generation_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('layout_generation', $split);
                    }
                    echo "layout_generation table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('layout_generation', $query);
                    echo "layout_generation table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table layout_generation sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "layout_generation table has been inserted values";
            echo "\n";
        }
    }

    function layout_results() {
        $layout_results_mysql = $this->mysql->get('layout_results');
        if (empty($layout_results_mysql->row_array())) {
            $layout_results_sqlsrv = $this->sqlsrv->get('layout_results');
            $query = $layout_results_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('layout_results', $split);
                    }
                    echo "layout_results table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('layout_results', $query);
                    echo "layout_results table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table layout_results sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "layout_results table has been inserted values";
            echo "\n";
        }
    }

    function pipe_res() {
        $pipe_res_mysql = $this->mysql->get('pipe_res');
        if (empty($pipe_res_mysql->row_array())) {
            $pipe_res_sqlsrv = $this->sqlsrv->get('pipe_res');
            $query = $pipe_res_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('pipe_res', $split);
                    }
                    echo "pipe_res table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('pipe_res', $query);
                    echo "pipe_res table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table pipe_res sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "pipe_res table has been inserted values";
            echo "\n";
        }
    }

    function record_position() {
        $record_position_mysql = $this->mysql->get('record_position');
        if (empty($record_position_mysql->row_array())) {
            $record_position_sqlsrv = $this->sqlsrv->get('record_position');
            $query = $record_position_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('record_position', $split);
                    }
                    echo "record_position table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('record_position', $query);
                    echo "record_position table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table record_position sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "record_position table has been inserted values";
            echo "\n";
        }
    }

    function temp_record_data() {
        $temp_record_data_mysql = $this->mysql->get('temp_record_data',10, 0);
        if (empty($temp_record_data_mysql->row_array())) {
            $temp_record_data_sqlsrv = $this->sqlsrv->get('temp_record_data');
            $query = $temp_record_data_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('temp_record_data', $split);
                    }
                    echo "temp_record_data table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('temp_record_data', $query);
                    echo "temp_record_data table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table temp_record_data sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "temp_record_data table has been inserted values";
            echo "\n";
        }
    }

    function stud_eqp_prm() {
        $stud_eqp_prm_mysql = $this->mysql->get('stud_eqp_prm',10, 0);
        if (empty($stud_eqp_prm_mysql->row_array())) {
            $stud_eqp_prm_sqlsrv = $this->sqlsrv->get('stud_eqp_prm');
            $query = $stud_eqp_prm_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    foreach ($query as $q) {
                        $data = [
                            'ID_STUD_EQUIP_PRM' => $q->ID_STUD_EQP_PRM ,
                            'ID_STUDY_EQUIPMENTS' => $q->ID_STUDY_EQUIPMENTS ,
                            'VALUE' => $q->VALUE ,
                            'VALUE_TYPE' => $q->VALUE_TYPE ,
                            
                        ];
                        $insert_row = $this->mysql->insert('stud_eqp_prm', $data);
                        
                    }
                    echo "stud_eqp_prm table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('stud_eqp_prm', $query);
                    echo "stud_eqp_prm table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table stud_eqp_prm sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "stud_eqp_prm table has been inserted values";
            echo "\n";
        }
    }

    function stud_equipprofile() {
        $stud_equipprofile_mysql = $this->mysql->get('stud_equipprofile',10, 0);
        if (empty($stud_equipprofile_mysql->row_array())) {
            $stud_equipprofile_sqlsrv = $this->sqlsrv->get('stud_equipprofile');
            $query = $stud_equipprofile_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('stud_equipprofile', $split);
                    }
                    echo "stud_equipprofile table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('stud_equipprofile', $query);
                    echo "stud_equipprofile table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table stud_equipprofile sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "stud_equipprofile table has been inserted values";
            echo "\n";
        }
    }

    function calculation_parameters() {
        $calculation_parameters_mysql = $this->mysql->get('calculation_parameters',10, 0);
        if (empty($calculation_parameters_mysql->row_array())) {
            $calculation_parameters_sqlsrv = $this->sqlsrv->get('calculation_parameters');
            $query = $calculation_parameters_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('calculation_parameters', $split);
                    }
                    echo "calculation_parameters table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('calculation_parameters', $query);
                    echo "calculation_parameters table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table calculation_parameters sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "calculation_parameters table has been inserted values";
            echo "\n";
        }
    }

    function pipe_gen() {
        $pipe_gen_mysql = $this->mysql->get('pipe_gen',10, 0);
        if (empty($pipe_gen_mysql->row_array())) {
            $pipe_gen_sqlsrv = $this->sqlsrv->get('pipe_gen');
            $query = $pipe_gen_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('pipe_gen', $split);
                    }
                    echo "pipe_gen table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('pipe_gen', $query);
                    echo "pipe_gen table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table pipe_gen sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "pipe_gen table has been inserted values";
            echo "\n";
        }
    }

    function line_definition() {
        $line_definition_mysql = $this->mysql->get('line_definition',10, 0);
        if (empty($line_definition_mysql->row_array())) {
            $line_definition_sqlsrv = $this->sqlsrv->get('line_definition');
            $query = $line_definition_sqlsrv->result();
            if (!empty($query)) {
                if (count($query) > 100) {
                    $splits = array_chunk($query,100);
                    foreach ($splits as $split) {
                        $insert_row = $this->mysql->insert_batch('line_definition', $split);
                    }
                    echo "line_definition table inserted > 100";
                    echo "\n";
                } else {
                    $insert_row = $this->mysql->insert_batch('line_definition', $query);
                    echo "line_definition table inserted < 100";
                    echo "\n";
                }
            } else {
                echo '<strong>'."table line_definition sql is null nothing values to insert".'</strong>';
                echo "\n";
            }
        } else {
            echo "line_definition table has been inserted values";
            echo "\n";
        }
    }

    


    function runQuery() {
        $this->minMax();
        $this->mediables();
        $this->media();
        $this->logging();
        $this->color_palette();
        $this->shape();
        $this->cooling_family();
        $this->equipfamily();
        $this->ln2user();
        $this->calc_ParamDef();
        $this->temp_Record_Pts_Def();
        $this->mesh_param_def();
        $this->monetaryCurrent();
        $this->language();
        $this->packing_elmt();
        $this->component();
        $this->compenth();
        $this->error_txt();
        $this->translation();
        $this->connection();
        $this->user_unit();
        $this->unit();
        $this->prodchar_colors_def();
        $this->studies();
        $this->production();
        $this->initial_temperature();
        $this->product();
        $this->mesh_generation();
        $this->prodchar_colors();
        $this->product_elmt();
        $this->mesh_position();
        $this->packing();
        $this->packing_layer();
        $this->haverage_results();
        $this->precalc_ldg_rate_prm();
        $this->prices();
        $this->study_results();
        $this->temp_record_pts();
        $this->report();
        $this->equipment();
        $this->consumptions();
        $this->equip_generation();
        $this->equip_gen_zone();
        $this->equipcharact();
        $this->equip_zone();
        $this->equipseries();
        $this->temp_ext();
        $this->precalc_ldg_rate();
        $this->ramps();
        $this->shelves();
        $this->load_losses();
        $this->line_elmt();
        $this->study_equipments();
        $this->dima_results();
        $this->eco_res_eqp();
        $this->economic_results();
        $this->exh_gen();
        $this->exh_res();
        $this->layout_generation();
        $this->layout_results();
        $this->pipe_res();
        $this->record_position();
        $this->temp_record_data();
        $this->stud_eqp_prm();
        $this->stud_equipprofile();
        $this->calculation_parameters();
        $this->pipe_gen();
        $this->line_definition();

        for($x=1;$x<=100;$x++){
            $this->progressBar($x, 100);
            usleep(100000);
        }
    }
    function progressBar($done, $total) {
        $perc = floor(($done / $total) * 100);
        $left = 100 - $perc;
        $write = sprintf("\033[0G\033[2K[%'={$perc}s>%-{$left}s] - $perc%% - $done/$total", "", "");
        fwrite(STDERR, $write);
    }

    function autoTrans () {
        $string = 'Hello World';
        $source_lang = 'en';
        $target_lang = 'zh-CN';
        header ( "Content-Type: text/html;charset=utf-8" );
        $data = file_get_contents ( 'https://www.googleapis.com/language/translate/v2?key=AIzaSyBVXK9AhZr__Bj7BbguOdW1mP0IDd3vwxc&q='.urlencode($string).'&source='.$source_lang.'&target='.$target_lang ); 
        $data = json_decode ( $data );  
        $translated = $data->data->translations[0]->translatedText;
        echo $translated;
    }
}