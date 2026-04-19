<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Student Registration Form</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>

  <form action="submit.php" method="post">
  <!-- REGISTRATION FORM -->
  <div class="form-wrapper">
    <h2>STUDENT REGISTRATION FORM</h2>

    <div class="form-row">
      <label>FIRST NAME</label>
      <div class="field"><input type="text" name="firstname" /></div>
    </div>

    <div class="form-row">
      <label>LAST NAME</label>
      <div class="field"><input type="text" name="lastname" /></div>
    </div>

    <div class="form-row">
      <label>DATE OF BIRTH</label>
      <div class="field dob-group">
        <select name="dob_day">
          <option>Day:</option>
          <script>for(let i=1;i<=31;i++) document.write(`<option>${i}</option>`)</script>
        </select>
        <select name="dob_month">
          <option>Month:</option>
          <option>January</option><option>February</option><option>March</option>
          <option>April</option><option>May</option><option>June</option>
          <option>July</option><option>August</option><option>September</option>
          <option>October</option><option>November</option><option>December</option>
        </select>
        <select name="dob_year">
          <option>Year:</option>
          <script>for(let y=2010;y>=1950;y--) document.write(`<option>${y}</option>`)</script>
        </select>
      </div>
    </div>

    <div class="form-row">
      <label>EMAIL ID</label>
      <div class="field"><input type="email" name="email" /></div>
    </div>

    <div class="form-row">
      <label>MOBILE NUMBER</label>
      <div class="field"><input type="text" name="mobile" /></div>
    </div>

    <div class="form-row">
      <label>GENDER</label>
      <div class="field radio-group">
        <label>Male</label><input type="radio" name="gender" value="male" />
        <label>Female</label><input type="radio" name="gender" value="female" />
      </div>
    </div>

    <div class="form-row">
      <label>ADDRESS</label>
      <div class="field"><textarea name="address"></textarea></div>
    </div>

    <div class="form-row">
      <label>CITY</label>
      <div class="field"><input type="text" name="city" /></div>
    </div>

    <div class="form-row">
      <label>PIN CODE</label>
      <div class="field"><input type="text" name="pincode" /></div>
    </div>

    <div class="form-row">
      <label>STATE</label>
      <div class="field"><input type="text" name="state" /></div>
    </div>

    <div class="form-row">
      <label>COUNTRY</label>
      <div class="field">
        <select name="country">
          <option value="">Select Country</option>
          <option value="India">India</option>
          <option value="USA">USA</option>
          <option value="UK">UK</option>
          <option value="Canada">Canada</option>
          <option value="Australia">Australia</option>
          <option value="Germany">Germany</option>
          <option value="France">France</option>
          <option value="Japan">Japan</option>
          <option value="China">China</option>
          <option value="Brazil">Brazil</option>
        </select>
      </div>
    </div>

    <div class="form-row">
      <label>HOBBIES</label>
      <div class="field checkbox-group">
        <label>Drawing</label><input type="checkbox" name="hobby[]" value="Drawing" />
        <label>Singing</label><input type="checkbox" name="hobby[]" value="Singing" />
        <label>Dancing</label><input type="checkbox" name="hobby[]" value="Dancing" />
        <label>Sketching</label><input type="checkbox" name="hobby[]" value="Sketching" />
        <br style="width:100%"/>
        <label>Others</label><input type="checkbox" name="hobby[]" value="Others" />
        <input type="text" class="others-input" name="other_hobby" />
      </div>
    </div>

    <hr class="section-divider" />

    <div class="form-row" style="align-items:flex-start;">
      <label style="padding-top:8px;">QUALIFICATION</label>
      <div class="field">
        <table class="qual-table">
          <thead>
            <tr>
              <th>Sl.No.</th>
              <th>Examination</th>
              <th>Board</th>
              <th>Percentage</th>
              <th>Year of Passing</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td><td>Class X</td>
              <td><input type="text" maxlength="10" name="board_x" /></td>
              <td><input type="text" name="percentage_x" /></td>
              <td><input type="text" name="year_x" /></td>
            </tr>
            <tr>
              <td>2</td><td>Class XII</td>
              <td><input type="text" maxlength="10" name="board_xii" /></td>
              <td><input type="text" name="percentage_xii" /></td>
              <td><input type="text" name="year_xii" /></td>
            </tr>
            <tr>
              <td>3</td><td>Graduation</td>
              <td><input type="text" maxlength="10" name="board_grad" /></td>
              <td><input type="text" name="percentage_grad" /></td>
              <td><input type="text" name="year_grad" /></td>
            </tr>
            <tr>
              <td>4</td><td>Masters</td>
              <td><input type="text" maxlength="10" name="board_masters" /></td>
              <td><input type="text" name="percentage_masters" /></td>
              <td><input type="text" name="year_masters" /></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td class="hint">(10 char max)</td>
              <td class="hint">(upto 2 decimal)</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <hr class="section-divider" />

    <div class="form-row">
      <label>COURSES<br/>APPLIED FOR</label>
      <div class="field courses-group">
        <span>BCA</span><input type="radio" name="course" value="BCA" />
        <span>B.Com</span><input type="radio" name="course" value="BCom" />
        <span>B.Sc</span><input type="radio" name="course" value="BSc" />
        <span>B.A</span><input type="radio" name="course" value="BA" />
      </div>
    </div>

    <div class="btn-row">
      <button type="submit">Submit</button>
      <button type="reset">Reset</button>
    </div>
  </div>
  </form>
</body>
</html>