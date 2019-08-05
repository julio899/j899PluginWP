<?php
class Procesos
{
    public function confirmacion_lic($req)
    {
        global $wpdb;
        $sql = "UPDATE `" . $wpdb->prefix . "j899_licences` SET `expire` = '" . $req['expire'] . "', `code` = '" . $req['lic'] . "', `confirm` = 1 WHERE `" . $wpdb->prefix . "j899_licences`.`id` = 1";
        $status        = $wpdb->query($sql);
        $req['status'] = $status;
        $req['sql'] = $sql;
        return $req;
    }

    public static function detaill_lic()
    {
        global $wpdb;
    	$sql = "SELECT * FROM `" . $wpdb->prefix . "j899_licences` WHERE id = 1";
    	return $wpdb->get_results($sql)[0];
    }
}
