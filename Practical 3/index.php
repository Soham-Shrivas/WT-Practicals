<?php
$dept = "Department of CSE(Cyber Security)";
$subTitle = "CLASSWISE TIME TABLE";
$session = "Session 2026-27 Odd Semester";
$semester = "SEM-VII / Section-II";
$classroom = "Class Room No: C-113";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Class Time Table</title>
</head>
<body>

<center>
    <h2><?php echo $dept; ?></h2>
    <h3><?php echo $subTitle; ?></h3>
    <p>
        <?php echo $session; ?><br>
        <?php echo $semester; ?><br>
        <?php echo $classroom; ?>
    </p>
    <h3>TIME TABLE</h3>
</center>

<table border="1" align="center" cellpadding="8" cellspacing="0">
    <tr bgcolor="#c0c0c0">
        <th>Day / Time</th>
        <th>12:10pm - 1:05pm</th>
        <th>1:05pm - 2:10pm</th>
        <th>2:10pm - 2:30pm</th>
        <th>2:30pm - 3:15pm</th>
        <th>3:15pm - 4:10pm</th>
        <th>4:10pm - 4:15pm</th>
        <th>4:15pm - 5:10pm</th>
        <th>5:10pm - 6:05pm</th>
    </tr>

    <tr>
        <th>MON</th>
        <td align="center">ACS<br>(SK)</td>
        <td align="center">AIS<br>(AD)</td>
        <td rowspan="5" align="center"><b>R<br>E<br>C<br>E<br>S<br>S</b></td>
        <td align="center">Club Activity</td>
        <td align="center">EAR<br>(SZ)</td>
        <td rowspan="5" align="center"><b>R<br>E<br>C<br>E<br>S<br>S</b></td>
        <td align="center">MD5<br>(AS)</td>
        <td align="center">Sports</td>
    </tr>

    <tr>
        <th>TUES</th>
        <td colspan="2" align="center">WT-A2 /ACS-A3<br>SV(A-111)/SK(C-108)</td>
        <td align="center">EAR<br>(SZ)</td>
        <td align="center">MD5<br>(AS)</td>
        <td colspan="2" align="center">WT-A1 /ACS-A2<br>SV(A-111)/SK(C-106)</td>
    </tr>

    <tr>
        <th>WED</th>
        <td align="center">AIS<br>(AD)</td>
        <td align="center">MD5<br>(AS)</td>
        <td align="center">EAR<br>(SZ)</td>
        <td align="center">WT<br>(SV)</td>
        <td colspan="2" align="center">ACS-A3 / SK(C-108)<br>(SK)</td>
    </tr>

    <tr>
        <th>THU</th>
        <td align="center">WT<br>(SV)</td>
        <td align="center">ACS<br>(SK)</td>
        <td align="center">AIS<br>(AD)</td>
        <td align="center">MD5<br>(AS)</td>
        <td align="center">Project</td>
        <td align="center">Library</td>
    </tr>

    <tr>
        <th>FRI</th>
        <td align="center">EAR<br>(SZ)</td>
        <td align="center">ACS<br>(SK)</td>
        <td colspan="2" align="center">WT-A3 /ACS-A1<br>SV(A-111)/SK(C-108)</td>
        <td align="center">Project</td>
        <td align="center">Library</td>
    </tr>

    <tr>
        <th>SAT</th>
        <td colspan="2" align="center">Forum Activity</td>
        <td>&nbsp;</td>
        <td colspan="2" align="center">Forum Activity</td>
        <td>&nbsp;</td>
        <td colspan="2" align="center">Forum Activity</td>
    </tr>
</table>

</body>
</html>