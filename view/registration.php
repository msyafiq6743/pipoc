<?php
    require "../external/header.php"
?>

<main>

    <?php
       require "../external/mainText.php";
       require "../external/navbar.php";
    ?>

<div class="container customFont space2">
    <form method="POST" action="../include/visitorRegSub.php">
        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-md-3">
                <label>
                    Bar Code :
                </label>
                <input type="text" class="form-control" name="barCode" autofocus>
            </div>

            <div class="form-group col-md-3">
                <label>
                    Registration Date :
                </label>
                <input type="text" class="form-control" name="regDate" value="<?php echo date("Y/m/d");?>">
            </div>
        </div>

        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-md-6">
                <label>
                    Full Name :
                </label>
                <input type="text" class="form-control" name="fName">
            </div>
        </div>

        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-md-3">
                <label>
                    Industry Sector :
                </label>
                <select class="form-control" name="inSector">
                    <option value="null">Select One</option>
                    <option value="Agri">Agriculture</option>
                    <option value="Bio-E">Bio-Energy</option>
                    <option value="Biotec">Biotechnology</option>
                    <option value="Eco">Economics</option>
                    <option value="Food">Food</option>
                    <option value="Gov">Government</option>
                    <option value="Mkt">Marketing</option>
                    <option value="Oleo">Oleochemical</option>
                    <option value="Pro Tech">Processing Technology</option>
                    <option value="R&D">Research and Development</option>
                    <option value="Sustain">Sustainability</option>
                    <option value="Other">Other</option>	
                </select>
            </div>

            <div class="form-group col-md-3">
                <label>
                    Country :
                </label>
                <select class="form-control " name="country">
                    <option value="null">Select One</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Australia">Australia</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Brazil">Brazil</option>
                    <option value="Brunei">Brunei Darussalam</option>
                    <option value="China">China</option>
                    <option value="Egypt">Egypt</option>
                    <option value="Germany">Germany</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Japan">Japan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="North Korea">North Korea</option>
                    <option value="South Korea">South Korea</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Timor-Leste">Timor-Leste</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="UAE">United Arab Emirates</option>
                    <option value="UK">United Kingdom</option>
                    <option value="USA">United States</option>
                    <option value="Other">Other</option>
                </select>
            </div>
        </div>

        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-md-6">
                <label>
                    Email :
                </label>
                <input type="email" class="form-control" name="email">
            </div>
        </div>

        <input type="hidden" class="form-control" name="role" value="visitor" >

        <div class="form-row d-flex justify-content-center">
            <div class="col-md-1">
                <button type="submit" class="btn btn-success" name="register">
                    Submit
                </button>
            </div>

            <div class="col-md-1">
                <button type="reset" class="btn btn-danger" name="reset">
                    Reset
                </button>
            </div>
        </div>
    </form>
</div>

</main>

    <?php
        require "../external/footer.php"
    ?>