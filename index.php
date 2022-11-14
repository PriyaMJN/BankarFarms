<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>बनकर फार्म </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
           <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">बनकर फार्म भाजीपाला / ऑर्डर : </a>
            <a class="navbar-brand" id="myId"></a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Contact us</a>
                </li> -->
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>

    <form method="post" id="frmSubmit" name="google-sheet">
        <div class="container">
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">उपलब्धता</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="दिवस" id="distcenter" value="मंगळवार" checked>
                        <label class="form-check-label radio-inline" for="distcenter">मंगळवार</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="दिवस" id="distcenter2" value="शुक्रवार">
                        <label class="form-check-label radio-inline" for="distcenter2">शुक्रवार</label>
                    </div>
                </div>
            </fieldset>
            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">नाव*</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="नाव" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="phone" class="col-sm-2 col-form-label">संपर्क क्रमांक</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="संपर्क क्रमांक" id="phone">
                </div>
            </div>
            <div class="row mb-3">
                <label for="address" class="col-sm-2 col-form-label">पत्ता</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="पत्ता" id="address">
                </div>
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">वितरण केंद्र</legend>
                <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="वितरण केंद्र" id="distcenter" value="साई तीर्थ लाकडी तेल घाना,सोसायटी हॉलसमोर अंब्रेल road, दिंडोरी. शरद देशमुख : 8668606403" checked>
                    <label class="form-check-label" for="distcenter">
                    साई तीर्थ लाकडी तेल घाना,सोसायटी हॉलसमोर अंब्रेल रोड, दिंडोरी. शरद देशमुख : 8668606403
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="वितरण केंद्र" id="distcenter2" value="बनकर मला,गॅस कंपनी जवळ,दिंडोरी.संपर्क : 9890065686">
                    <label class="form-check-label" for="distcenter2">
                    बनकर मला,गॅस कंपनी जवळ,दिंडोरी.संपर्क : 9890065686
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="वितरण केंद्र" id="distcenter3" value="साई कृषी भंडार,स्नेह नगर बस स्टॉप, दिंडोरी रोड, मसरुळ.वैशाली मुळाणे : 9405594268">
                    <label class="form-check-label" for="distcenter3">
                    साई कृषी भंडार,स्नेह नगर बस स्टॉप, दिंडोरी रोड, मसरुळ.वैशाली मुळाणे : 9405594268
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="वितरण केंद्र" id="distcenter4" value="काशिनाथ संकुल, पौर्णिमा बस स्टॉप, नाशिक पुणे हायवे, द्वारका.करन बनकर :9156558983">
                    <label class="form-check-label" for="distcenter4">
                    काशिनाथ संकुल, पौर्णिमा बस स्टॉप, नाशिक पुणे हायवे, द्वारका.करन बनकर :9156558983
                    </label>
                </div>
                </div>
            </fieldset>
            
            <table class="table table-dark table-hover" id="myTable" name="array[]">
                <thead>
                    <tr>
                    <th scope="col" width="20%" style="text-align: center">अनुक्रमांक</th>
                    <th scope="col" width="20%">भाजी</th>
                    <th scope="col" width="30%" >दर</th>
                    <!-- <th scope="col" width="20%">किमान प्रमाण</th> -->
                    <th scope="col" width="20%">प्रमाण</th>
                    <th scope="col" width="20%">एकूण</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" style="text-align: center" >1</th>
                        <td>शेपू </td>
                        <td>30रु. / 1 जुडी</td>
                        <!-- <td>1 जुडी</td> -->
                        <td>
                            <div class="form-group">
                                <select onChange="shepuPrice()" onBlur="findTotal()" class="form-control" id="shepu" name="शेपू">
                                <option value="0">0</option>
                                <option value="30">1 जुडी</option>
                                <option value="60">2 जुडी</option>
                                <option value="90">3 जुडी</option>
                                <option value="120">4 जुडी</option>
                                </select>
                            </div>
                        </td>
                        <td><span name="vegitable" class="sPrice" ></span> रु.</td>
                    </tr>
                    <tr>
                        <th scope="row" style="text-align: center">2</th>
                        <td>भेंडी </td>
                        <td>25रु. / 250 ग्रॅम</td>
                         <!--<td>250 ग्रॅम</td>-->
                        <td>
                            <div class="form-group">
                                <select onChange="bhendiPrice()" onBlur="findTotal()" class="form-control" id="bhendi"  name="भेंडी">
                                <option value="0">0</option>
                                <option value="25">250 ग्रॅम</option>
                                <option value="50">500 ग्रॅम</option>
                                <option value="75">750 ग्रॅम</option>
                                <option value="100">1 किलो</option>
                                <option value="200">2 किलो</option>
                                </select>
                            </div>
                        </td>
                        <td><span name="vegitable" class="bPrice" ></span> रु.</td>
                    </tr>
                    <tr>
                        <th scope="row" style="text-align: center">3</th>
                        <td>गिलके  </td>
                        <td>25रु / 250 ग्रॅम </td>
                         <!--<td>250 ग्रॅम</td>-->
                        <td>
                            <div class="form-group">
                            <select onChange="gilkePrice()" onBlur="findTotal()" class="form-control" id="gilke" name="गिलके">
                                <option value="0">0</option>
                                <option value="25">250 ग्रॅम</option>
                                <option value="50">500 ग्रॅम</option>
                                <option value="75">750 ग्रॅम</option>
                                <option value="100">1 किलो</option>
                                <option value="200">2 किलो</option>
                            </select>
                            </div>
                        </td>
                        <td><span name="vegitable" class="gPrice" ></span> रु.</td>
                    </tr>
                    <tr>
                        <th scope="row" style="text-align: center">4</th>
                        <td>कोबि </td>
                        <td>10रु. / 1 कंद</td>
                        <!-- <td>1 कंद </td> -->
                        <td> 
                            <div class="form-group">
                                <select onChange="kobiPrice()" onBlur="findTotal()" class="form-control" id="kobi" name="कोबि">
                                <option value="0">0 </option>
                                <option value="10">1 कंद </option>
                                <option value="20">2 कंद </option>
                                <option value="30">3 कंद </option>
                                <option value="40">4 कंद </option>
                                </select>
                            </div>
                        </td>
                        <td><span name="vegitable" class="cPrice" ></span> रु.</td>
                    </tr>
                    <tr>
                        <th scope="row" style="text-align: center">5</th>
                        <td>कारले </td>
                        <td>15रु. / 250 ग्रॅम</td>
                         <!--<td>250 ग्रॅम</td>-->
                         <td>
                            <div class="form-group">
                            <select onChange="karlePrice()" onBlur="findTotal()" class="form-control" id="karle" name="कारले">
                                <option value="0">0</option>
                                <option value="15">250 ग्रॅम</option>
                                <option value="30">500 ग्रॅम</option>
                                <option value="45">750 ग्रॅम</option>
                                <option value="60">1 किलो</option>
                                <option value="120">2 किलो</option>
                            </select>
                            </div>
                        </td>
                        <td><span name="vegitable" class="kPrice" ></span> रु.</td>
                    </tr>
                    <tr>
                        <th scope="row" style="text-align: center">6</th>
                        <td>गवार </td>
                        <td>25रु. / 250 ग्रॅम</td>
                        <!--<td>250 ग्रॅम</td>-->
                        <td>
                            <div class="form-group">
                            <select onChange="gavarPrice()" onBlur="findTotal()" class="form-control" id="gavar" name="गवार">
                                <option value="0">0</option>
                                <option value="25">250 ग्रॅम</option>
                                <option value="50">500 ग्रॅम</option>
                                <option value="75">750 ग्रॅम</option>
                                <option value="100">1 किलो</option>
                                <option value="200">2 किलो</option>
                            </select>
                            </div>
                        </td>
                        
                        <td><span name="vegitable" class="price" ></span> रु.</td>
                    </tr>
                    <tr>
                        <th scope="row" style="text-align: center">7</th>
                        <td>दोडके </td>
                        <td>20रु. / 250 ग्रॅम</td>
                        <!--<td>250 ग्रॅम</td>-->
                        <td>
                            <div class="form-group">
                            <select onChange="dodkePrice()" onBlur="findTotal()" class="form-control" id="dodke" name="दोडके">
                                <option value="0">0</option>
                                <option value="20">250 ग्रॅम</option>
                                <option value="40">500 ग्रॅम</option>
                                <option value="60">750 ग्रॅम</option>
                                <option value="80">1 किलो</option>
                                <option value="160">2 किलो</option>
                            </select>
                            </div>
                        </td>
                        <td><span name="vegitable" class="dPrice" ></span> रु.</td>
                    </tr>
                    <tr>
                        <th scope="row" style="text-align: center">8</th>
                        <td >भोपळा </td>
                        <td>20रु. / 1 नग</td>
                        <!-- <td>1 नग</td> -->
                        <td> 
                            <div class="form-group">
                                <select onChange="bhoplaPrice();" onBlur="findTotal()" class="form-control" name="भोपळा" id="bhopla">
                                <option value="0">0 </option>
                                <option value="20">1 नग </option>
                                <option value="40">2 नग </option>
                                <option value="60">3 नग </option>
                                <option value="80">4 नग </option>
                                </select>
                              
                            </div>
                        </td>
                        <td><span name="vegitable" class="bhPrice" ></span> रु.</td>
                    </tr>
                    <tr>
                        <td colspan ="3" style="text-align: center;">एकूण बिल --></td>
                        <td colspan ="2"><input type="text" class="form-control" id="total" name="एकूण"></td>
                        <script type="text/javascript">
                            function findTotal()
                            {
                                var arr=document.getElementsByName('vegitable');
                                console.log(arr[1].innerHTML);
                                var tot=0;
                                for(var i=0;i<arr.length;i++){
                                    if(parseInt(arr[i].innerHTML))
                                        tot+=parseInt(arr[i].innerHTML);
                                }
                                document.getElementById('total').value=tot;
                            }
                        </script>
                    </tr>
                </tbody>
            </table>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">पेमेंट पर्याय</legend>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="पेमेंट पर्याय" id="inlineRadio1" value="फोन पे" checked>
                        <label class="form-check-label" for="inlineRadio1">फोन पे</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="पेमेंट पर्याय" id="inlineRadio2" value="गुगल पे">
                        <label class="form-check-label" for="inlineRadio2">गुगल पे</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="पेमेंट पर्याय" id="inlineRadio3" value="रोख">
                        <label class="form-check-label" for="inlineRadio3">रोख</label>
                    </div>
                </div>
            </fieldset>
            <span class="output"></span>
            <input  type="submit"  name="button" class="btn btn-primary btn-lg" id="btnSubmit" />
       </div>
    </form>

    <script>
            const scriptURL = 'https://script.google.com/macros/s/AKfycbwqRO3ekQL3ycv-tJkFGKNXjy5ndjHSm4n_m_-cjcSRS2gA5R41KITuaCYY22ILqTonkQ/exec';
            const form = document.forms['google-sheet']
          
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => alert("Thanks for Contacting us..! We Will Contact You Soon..."))
                .catch(error => console.error('Error!', error.message))
            })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script> 
        const month = ["जानेवारी ","फेब्रुवारी ","मार्च ","एप्रिल ","मे ","जून ","जुलै ","ऑगस्ट ","सप्टेंबर ","ऑक्टोबर ","नोव्हेंबर ","डिसेंबर "];
        var date = new Date(); 
        var dd = date.getDate(); 
        var mm = month[date.getMonth()];
        var yyyy = date.getFullYear(); 
        var newDate = dd + "-" + mm + "-" +yyyy; 
        var p = document.getElementById("myId"); 
        p.innerHTML = newDate; 
    </script> 
     <script>
     function shepuPrice(){
            selectElement=document.querySelector('#shepu') ;
            sPrice=selectElement.value;
            document.querySelector('.sPrice').textContent=sPrice;
       }  
       function bhendiPrice(){
            selectElement=document.querySelector('#bhendi') ;
            bPrice=selectElement.value;
            document.querySelector('.bPrice').textContent=bPrice;
       }     
       function gilkePrice(){
            selectElement=document.querySelector('#gilke') ;
            gPrice=selectElement.value;
            document.querySelector('.gPrice').textContent=gPrice;
       }
       function kobiPrice(){
            selectElement=document.querySelector('#kobi') ;
            cPrice=selectElement.value;
            document.querySelector('.cPrice').textContent=cPrice;
       }     
       function karlePrice(){
            selectElement=document.querySelector('#karle') ;
            kPrice=selectElement.value;
            document.querySelector('.kPrice').textContent=kPrice;
       }
       function gavarPrice(){
            selectElement=document.querySelector('#gavar') ;
            price=selectElement.value;
            document.querySelector('.price').textContent=price;
       }
       function dodkePrice(){
            selectElement=document.querySelector('#dodke') ;
            dPrice=selectElement.value;
            document.querySelector('.dPrice').textContent=dPrice;
       }   
       let bhPrice;  
       function bhoplaPrice(){
            selectElement=document.querySelector('#bhopla') ;
            bhPrice=selectElement.value;
            document.querySelector('.bhPrice').textContent=bhPrice;
           // alert(sel.options[sel.selectedIndex].text);
        }
        bhoplaPrice();
        console.log(bhPrice);
    </script>
   
</body>
</html>