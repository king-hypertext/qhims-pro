<?php


if (!function_exists('generatePatientID')) {
    /**
     * 
     *
     * Generate a new opd number for a new patient
     *
     * @param null null
     * @return string
     **/
    function generatePatientID()
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';

        function getLastUsedId()
        {
            // $id = Patients::latest()->first();
            // if ($id == null) 
            return "AAA0000";
            // return  $id->opd_no;
        }

        // Get the last used ID from the database
        $lastId = getLastUsedId(); // Implement this function to get the last used ID

        if ($lastId == null) {
            // If there's no last used ID, start from the beginning
            $charPart = substr($characters, 0, 3);
            $numPart = substr($numbers, 0, 4);
        } else {
            $charPart = substr($lastId, 0, 3);
            $numPart = substr($lastId, 3, 4);

            // Increment the number part
            $numPart++;
            if ($numPart > 9999) {
                $numPart = 0;

                // If the number part has reached its maximum, increment the character part
                $charIndex = 0;
                for ($i = 2; $i >= 0; $i--) {
                    $char = $charPart[$i];
                    $charIndex = strpos($characters, $char);
                    if ($charIndex < strlen($characters) - 1) {
                        $charPart[$i] = $characters[$charIndex + 1];
                        break;
                    } else {
                        $charPart[$i] = $characters[0];
                    }
                }
            }
        }

        return $charPart . str_pad($numPart, 4, '0', STR_PAD_LEFT);
    }
    /**
     * get the last visit 
     *
     * 
     *
     *
     * @return Number
     * @throws conditon
     **/
    function getvisitNumber()
    {
        // $last_visit = Appointment::select('id')->count();
        // if ($last_visit == null) return 1;
        // return $last_visit + 1;
        return 1;
    }

    /**
     * generate user id
     *
     *
     *
     * @return String User ID
     * 
     **/
    function generateUserId()
    {
        // $last_user_id = User::latest()->first();
        // if ($last_user_id == null) return "SID1";
        // return "SID" . intval(trim($last_user_id->staff_id, "SID")) + 1;
        return "SID1";
    }
}
