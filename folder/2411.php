<html>
    <head>
        <title>Nguyễn Thị Thu Hiền</title>
        <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center; 
        }
    </style>

    </head>
    <body>
        <h2>Market Research Survey</h2>
        <p>Please take a few moments to complete this satisfaction survey.</p>
        <form action="">
            <div>
            <b>What is your age range?</b><br> <select name="select1" id="">
            <option>18-24</option>
            <option>25-34</option>
            <option>35-50</option>
            <option>50+</option>
        </select>
            </div>
        <div>
            <br><b>What is your yearly income range?</b> <br><select name="select2" id="">
            <option>$10-$25,000</option>
            <option>$25,001-$50,000</option>
            <option>$50,001-$100,000</option>
            <option>$100,000+</option>
        </select>
        </div>
        <div>
            <br><b>Gender Identity</b><br>
            <div><input name="gender" type="radio" value="Male" />Male</div> 
            <div><input name="gender" type="radio" value="Female" />Female</div>
            <div><input name="gender" type="radio" value="Nonbinary" />Nonbinary</div>
            <div><input name="gender" type="radio" value="Other" />Other
            <input type="text" name="" id=""></div>
            
           
        </div>
        <div>
            <label for=""><br><b>Which of the following products have your purchased in the last 2 months. Please check all that apply.</b><br></label>
            <div><input type="checkbox" name="checkbox1" id=""> Product 1</div>
            <div><input type="checkbox" name="checkbox2" id=""> Product 2</div>
            <div><input type="checkbox" name="checkbox3" id=""> Product 3</div>
            <label for=""><br><b>How often would you use our new product?</b><br></label>
            <div><input name="gender" type="radio" value="Daily" />Daily</div>
            <div><input name="gender" type="radio" value="Weekly" />Weekly
            <div><input name="gender" type="radio" value="Monthly" />Monthly 
        </div>
        <div>
            <label for=""><br><b>What would you pay for the new product?</b> <br></label>
            <div>
                $ <input type="text" name="" id="" cols="20">. <input type="text" name="" id="" cols="10">
            </div>
        </div>
        <div>
            <label for=""><br><b>What features would you like to see in the new product.</b><br></label>
            <textarea name="" id="" cols="40" rows="7"></textarea>
        </div>
        <div>
            <p>Please rate your level of agreement with the following statements.</p>
            <table border=2px>
                <tr>
                    <th></th>
                    <td>Strongly Disagree</td>
                    <td>Disagree</td>
                    <td>Agree</td>
                    <td>Strongly Agree</td>
                </tr>
                <tr>
                    <th>Our products are priced fairly.</th>
                    <td><input type="radio" name="" id="" values="1"><br>1</td>
                    <td><input type="radio" name="" id="" values="2"><br>2</td>
                    <td><input type="radio" name="" id="" values="3"><br>3</td>
                    <td><input type="radio" name="" id="" values="4"><br>4</td>
                    
                </tr>
                <tr>
                    <th>Our products are high quality.</th>
                    <td><input type="radio" name="" id="" values="1"><br>1</td>
                    <td><input type="radio" name="" id="" values="2"><br>2</td>
                    <td><input type="radio" name="" id="" values="3"><br>3</td>
                    <td><input type="radio" name="" id="" values="4"><br>4</td>
                </tr>
                <tr>
                    <th>You would recommend our product to a friend or coworker.</th>
                    <td><input type="radio" name="" id="" values="1"><br>1</td>
                    <td><input type="radio" name="" id="" values="2"><br>2</td>
                    <td><input type="radio" name="" id="" values="3"><br>3</td>
                    <td><input type="radio" name="" id="" values="4"><br>4</td>

                </tr>
            </table>
        </div>
       <button>Submit</button>

        </div>
        

        </form>
        
    </body>

</html>