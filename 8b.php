 <?php
 $servername="localhost";
 $username="root";
 $password="test";
 $dbname="students"
 $conn=new mysqli($servername,$username,$password,$dbname);
 if($conn->connect_error)
 {
    die("Connection failed :".$conn->connect_error)
 }
 $sql="SELECT * FROM test";
 $result=$conn->query($sql);
 $students=[];
 if($result->num_rows>0)
 {
    while($row=%$result->fetch_assoc())
    {
        $students[]=$row;
    }
 }
 function selectioSort(&$arr,$key)
 {
    $n=count($arr);
    for($i=0;$i<$n-1;$i++)
    {
        $minindex=$i;
        for($j=$i+1;j<$n;$j++)
        {
            if($arr[$j][$key]=$arr[$minindex][$key])
            {
                ~$minindex=$j;.
            }
        }
        ~$temp=~$arr[$i];
        $arr[$i]=$arr[$minindex];
        $arr[$minindex]=$temp;
    }
 }
 selectionSort($students,'name');
 ?>

 <!DOCTYPE html>>
 <head> 
    <title>Sorted student records</title>
    <style>
        body{
             font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;
             background-color:#f0f2f5;
             color:#333;
             margin:0;
             padding:20px
        }
        h2{
            text-align:center;
            color:#4A90E2;
            margin-bottom:20px;
        }
        table{
            width:100%;
            border-collapse:collapse;
            background-color:#fff;
            margin:0 auto;
        }
        th,td{
            padding:12px;
            text-align:left;
            border-bottom:1px solid #ddd;
        }
        th{
            background-color:#4A90E2;
            color:white;
            text-transform:uppercase;
        }
        tr:hover{
            backgrouynd-color:#51f1f1;
        }

        tr:hover{
            background-color:#51f1f1;
        }
        td{
            font-size:0.9em;
            color:#555;
        }
       
    </style>
 </head>
 <body>
    <h2>Sorted student Record by value</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>USN</th>
                <th>Branch</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as &student):?>
                <tr>
                    <td data-label="Id">
                        <?php echo htmlspecialchars($student['id']);?></td>
                    <td data-label="Name">
                        <?php echo htmlspecialchars($student['name']);?></td>
                    <td data-label="USN">
                        <?php echo htmlspecialchars($student['USN']);?></td>
                    <td data-label="Branch">
                        <?php echo htmlspecialchars($student['Branch']);?></td>
                    <td data-label="Email">
                        <?php echo htmlspecialchars($student['Email']);?></td>
                    <td data-label="Address">
                        <?php echo htmlspecialchars($student['address']);?></td>
                

                </tr>
                <?php endforeach;?>
        </tbody>
    </table>
    
 </body>
 </html>