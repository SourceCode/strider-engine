<?php
function getStatus($statusId)
{
    switch($statusId)
    {
        default:
                return 'Unknown';
            break;
        case 0:
                return 'Pending';
            break;
        case 1:
                return 'Active';
            break;
        case 2:
                return 'Inactive';
            break;
        case 3:
                return 'Deleted';
            break;
        case 4:
                return 'Flagged';
            break;
        case 5:
                return 'Approved';
            break;  
    }
}
?>
