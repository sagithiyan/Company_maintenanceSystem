<?php
$db = mysqli_connect("localhost","root","","company_maintenance_system");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  
								while ($employee = mysqli_fetch_assoc($result)) {
									echo "<tr>";

										echo "<td>".$employee['Emp_Id']."</td>";
										echo "<td>".$employee['Fname']."</td>";
										echo "<td>".$employee['Lname']."</td>";
										echo "<td>".$employee['Street']."</td>";
										echo "<td>".$employee['Number']."</td>";
										echo "<td>".$employee['City']."</td>";
										echo "<td>".$employee['Phone_No']."</td>";
										echo "<td>".$employee['Email']."</td>";
										echo "<td>".$employee['DOB']."</td>";
										echo "<td>".$employee['Age']."</td>";
										echo "<td>".$employee['Qualification']."</td>";
										echo "<td>".$employee['Designation']."</td>";
										echo "<td>".$employee['Experience']."</td>";
										echo "<td>".$employee['Join_Date']."</td>";
									
									echo "</tr>";
								}
						?>		