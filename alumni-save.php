<?php
$conn = new mysqli(hostname: "localhost", username: "root", password: "alish@2006", database: "college");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['name'];
$father_name = $_POST['father-name'];
$starting_year = $_POST['starting-year'];
$ending_year = $_POST['ending-year'];
$gender = $_POST['gender'];
$date_of_birth = $_POST['date-of-birth'];
$cnic = $_POST['cnic'];
$mobile = $_POST['mobile'];
$email = $_POST['email-alumni'];
$department = $_POST['department'];
$full_address = $_POST['full-address'];
$last_degree = $_POST['last-degree'];
$degree_status = $_POST['degree-status'];
$employment_status = $_POST['employment-status'];
$designation = $_POST['designation'];
$organization = $_POST['organization'];
$experience = $_POST['experience'];
if ($experience === "") {
    $experience = 0;
}
$facebook = $_POST['facebook'];
$linkedin = $_POST['linkedin'];
$accomplishments = $_POST['accomplishments'];
$consent = $_POST['consent'];
$profile_link = $_POST['profile-link'];
$help_school = $_POST['help-school'];

$sql = "INSERT INTO alumni (name, father_name, starting_year, ending_year, gender, date_of_birth, cnic, mobile, email, department, full_address, last_degree, degree_status, employment_status, designation, organization, experience, facebook, linkedin, accomplishments, consent, profile_link, help_school)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssssssssssssssssss", $name, $father_name, $starting_year, $ending_year, $gender, $date_of_birth, $cnic, $mobile, $email, $department, $full_address, $last_degree, $degree_status, $employment_status, $designation, $organization, $experience, $facebook, $linkedin, $accomplishments, $consent, $profile_link, $help_school);

if ($stmt->execute()) {
    echo "Form submitted successfully!";
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>