<!-- ***************************************************************************************
    Author     : Richard Orfao 
    Course     :  CGS 4854-U01 (82024) Websiteconmgmt Class Lecture MoWe    5:00PM  -  6:15PM @ECS 136
    URL        : ocelot.aul.fiu.edu/~rorfa001
    Professor  : Michael Robinson 
    Program #  : Assignment 2 
                 { To work with tables, fonts, colors and images } 

    Due Date   : 09/05/2018 
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{ Richard Orfao }..........

  **************************************************************************************** -->
<html>

	<head>

		<title>Orfao Richard Pgm2</title>

	</head>

  <!-- I have the FIU website educational comments and Table with menu-->
  <body link="blue" vlink="blue" alink="red">

    <!-- Table For Top Part FIU EDUCATIONAL -->
    <table width="100%">

      <tr>

        <td align="center">
          <font size="6" color="#FF1A0A" face="Helvetica"> <b> ~~~~ This is an educational website ~~~~ </b> </font>
          <br>
          <font size="6" color="#0736EE" face="Helvetica"> <b> <a href="https://www.cis.fiu.edu/">Florida International University</a> </b> </font><br>
        </td>

      </tr>

    </table>

    <font size="5">Orfao Richard Program 2</font>

		<hr>

    <table width="100%">

      <tr>

        <td align="center">
          
          <font size="20"> Orfao's Autoparts </font>

        </td>

      </tr>

    </table>

    <?php include('mainMenu.php') ?>

    <table>

        <tr>
          <td align="center">
            
            &nbsp;

          </td>
        </tr>

        <tr>
          <td align="center">
            
            &nbsp;

          </td>
        </tr>

    </table>

		
    <form method="post" action="controller2.php">

      <table width="80%" align="center">
        
        <tr>
          
          <td style="width: 10%;">
            <font size="5" face="Arial">Customer ID</font>
          </td>

          <td style="width: 15%;">
            <input type="text" name="CustomerID" value="" style="width: 100%; font: 20px arial;">
          </td>

          <td style="width: 2%;"></td>

          <td style="width: 10%;">

            <font size="5" face="Arial">Car Brand</font>
          </td>

          <td style="width: 30%;">

            <select name="CarBrand" style="width:50%; font-size:25px;">
              <option value="Toyota" > Toyota </option>
              <option value="Honda"> Honda </option>
              <option value="Hyundai"> Hyundai </option>
              <option value="Volkswagen"> Volskwagen </option>
              <option value="Mitsubishi"> Mitsubishi </option>
              <option value="Ford"> Ford </option>
              <option value="Chevrolet"> Chevrolet </option>
            </select>

          </td>

        </tr>

        <tr>

          <td style="width: 10%;">
            <font size="5" face="Arial">First Name</font>
          </td>

          <td style="width: 15%;">
            <input type="text" name="FirstName" value="" style="width: 100%; font: 20px arial;">
          </td>

          <td style="width: 2%;"></td>

          <td style="width: 5%;"></td>

          <td style="width: 30%;">

          </td>

        </tr>

        <tr>

        <td style="width: 10%;">
            <font size="5" face="Arial">Last Name</font>
          </td>

          <td style="width: 15%;">
            <input type="text" name="LastName" value="" style="width: 100%; font: 20px arial;">
          </td>

          <td style="width: 2%;"></td>

          <td style="width: 5%;">
            <font size="5" face="Arial">Type of Car</font> 
          </td>

          <td style="width: 30%;">
            <input type="checkbox" name="Sedan" value="Sedan"> <font size="5">Sedan</font> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" name="SUV" value="SUV"> <font size="5">SUV</font> &nbsp; &nbsp;&nbsp;
            <input type="checkbox" name="Truck" value="Truck"> <font size="5">Truck</font> &nbsp; &nbsp;&nbsp;
            <input type="checkbox" name="Sport" value="Sport"> <font size="5">Sport</font> &nbsp; &nbsp;&nbsp;
          </td>

        </tr>

        <tr>

        <td style="width: 10%;">
            <font size="5" face="Arial">E-mail</font>
          </td>

          <td style="width: 15%;">
            <input type="text" name="Email" value="" style="width: 100%;  font: 20px arial;">
          </td>

          <td style="width: 2%;"></td>

          <td style="width: 5%;">
            <font size="5" face="Arial"> </font>
          </td>

          <td style="width: 20%;">

          </td>

        </tr>

        <tr>

          <td style="width: 10%;">
            <font size="5" face="Arial">Telephone</font>
          </td>

          <td style="width: 15%;">
            <input type="text" name="Telephone" value="" style="width: 100%;  font: 20px arial;">
          </td>

          <td style="width: 2%;"></td>

          <td style="width: 5%;">
            <font size="5" face="Arial">Year</font>
          </td>

          <td style="width: 20%;">

            <input type="radio" name="Year" value="2016"> <font size="5">2016</font> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
            <input type="radio" name="Year" value="2017"> <font size="5">2017</font> &nbsp; &nbsp;&nbsp;
            <input type="radio" name="Year" value="2018"> <font size="5">2018</font> &nbsp; &nbsp; &nbsp;&nbsp;
            <input type="radio" name="Year" value="2019"> <font size="5">2019</font> &nbsp; &nbsp; &nbsp;

          </td>

        </tr>


        <tr>

          <td style="width: 10%;">
            
          </td>

          <td style="width: 20%;">
            
          </td>

          <td style="width: 2%;"></td>

          <td style="width: 5%;">
          
          </td>

          <td style="width: 20%;">
            <font> &nbsp </font>
          </td>

        </tr>

        <tr>

          <td style="width: 10%;">
            
          </td>

          <td style="width: 20%;">
            
          </td>

          <td style="width: 2%;"></td>

          <td style="width: 5%;">
            <font size="5" face="Arial">Comments</font>
          </td>

          <td style="width: 20%;">

            <textarea name="Comments" style="width: 50%; height: 100; font-size: 28px;"></textarea>

          </td>

        </tr>

        <tr><td> <br> </td></tr>

      </table>


      <table align="center" >

        <tr>
          <td align="center">
            
            <font size="5" face="arial">$message</font>

          </td>
        </tr>

        <tr>
          <td align="center">
            
            &nbsp;

          </td>
        </tr>

        <tr>
          <td align="center">
            
            <input type="submit" name="Submit" value="Find" style="height:40px; width:100px; font-size:20px;"> &nbsp;
            <input type="Submit" name="Modify" value="Modify" style="height:40px; width:100px; font-size:20px;"> &nbsp;
            <input type="Submit" name="Save" value="Save" style="height:40px; width:100px; font-size:20px;"> &nbsp;
            <input type="Submit" name="Delete" value="Delete" style="height:40px; width:120px; font-size:20px;"> &nbsp;
            <input type="reset" name="ClearScreen" value="Clear Screen" style="height:40px; width:150px; font-size:20px;"> &nbsp;

          </td>
        </tr>
      
      
      </table>
      
    </form>

    <table>

        <tr>
          <td align="center">
            
            &nbsp;

          </td>
        </tr>

        <tr>
          <td align="center">
            
            &nbsp;

          </td>
        </tr>

    </table>

    <?php include('mainMenu.php') ?>

  </body>

</html>
