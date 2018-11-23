// JavaScript Document
function _(el) {
    return document.getElementById(el);
}
var xmlHttp = createXmlHttpRequestObject(); //we created an object here
function createXmlHttpRequestObject() {
    var xmlHttp;
    if (window.ActiveXObject) {
        try {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (e) {
            xmlHttp = false;
        }
    } else {
        try {
            xmlHttp = new XMLHttpRequest();
        } catch (e) {
            xmlHttp = false;
        }
    }
    if (!xmlHttp)
        alert("cant create that Object hoss");
    else
        return xmlHttp;
}
getStudentDet = function(id){
    var regNum = _(""+id+"").value;
    var dtString  = "getRegNum="+regNum;
    if(regNum!= ""){
        ajaxPOST('PHP/getStuDetails.php', function(){
            if (this.readyState == 4 && this.status == 200){
                var responsses = this.responseText;// getStuDetails.php
                alert(responsses);
                            
        }
    },dtString);
}else{
    alert("PROVIDE REGISTRATION NUMBER");
    return;
}


function flogin() { //if our object is ready to communicate with the server

    if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4) {

        // var fn = encodeURIComponent(document.getElementById("first_name").value);
        //var ln = encodeURIComponent(document.getElementById("last_name").value);
        // var conf = confirm("Are you sure, you want to vote "+name);
        //alert("voted");
        //return;
        var logo = document.getElementById("submitlogo");

        logo.className = logo.className.replace("windows", "cog");
        logo.classList.add("fa-spin");
        //return;
        var uname = document.getElementById('uname').value;
        var pass = document.getElementById('pass').value;
        var dataString = 'Username=' + uname + '&Passw=' + pass;
        if (uname = "" || pass == "") {
            alert("Please All fills Are Required");
        } else {
            xmlHttp.open("POST", "submitLogin.php", true); //send request to the server
            //thie will do the actual sending.Note,null is used bcos we r using get to send request to the server
            xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlHttp.onreadystatechange = handleServerResponse3; //get the response from the server
            xmlHttp.send(dataString);
            //document.getElementById("disForm").innerHTML="Processing...";
        }

    } else {
        setTimeout("flogin()", 500);
    }

}

function handleServerResponse3() {
    //here the server sends back an xml file
    if (xmlHttp.readyState == 4) {
        if (xmlHttp.status == 200) {
            //var ajaxDisplay = document.getElementById('underInput');
            //ajaxDisplay.innerHTML = xmlHttp.responseText;
            var xmlResponse = xmlHttp.responseText; //this extrect the xml file from echo under foodsore.php
            // xmlDocumentElement=  xmlResponse.documentElement;
            //message = xmlDocumentElement.firstChild.data;
            //document.getElementById("disForm").innerHTML='<span style="color:blue">' +xmlResponse+ '</span>';
            //setTimeout("process()",500);
            var logo = document.getElementById('submitlogo');
            logo.className = logo.className.replace("cog", "windows");
            logo.classList.remove("fa-spin");
            if (xmlResponse == 'Successful') {
                document.location = "generalNav1.html";
            } else {
                alert(xmlResponse)
                    //document.getElementById("disForm").innerHTML='<span style="color:blue">' +xmlResponse+ '</span>';
            }
        } else {
            alert('Something Went Wrong');
        }
    }
}
//sendMail Function
function sendMail() { //if our object is ready to communicate with the server

    if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4) {

        // var fn = encodeURIComponent(document.getElementById("first_name").value);
        //var ln = encodeURIComponent(document.getElementById("last_name").value);
        // var conf = confirm("Are you sure, you want to vote "+name);
        //alert("voted");
        //return;
        // var logo = document.getElementById("showMailSending").style.display="block";
        // var logo1 = document.getElementById("sendm");

        // logo1.className = logo1.className.replace("mail-forward","cog");
        // logo1.classList.add("fa-spin");
        var mailfrom = document.getElementById('mailfrom').value;
        var mailto = document.getElementById('mailto').value;
        var subject = document.getElementById('subjectt').value;
        var meg = document.getElementById('meg').value;
        var dataString = 'mailfrom1=' + mailfrom + '&mailto1=' + mailto + '&subject1=' + subject + '&meg1=' + meg;
        if (mailfrom = "" || mailto == "" || subject == "" || meg == "") {
            alert("Please All fills Are Required");
        } else {
            xmlHttp.open("POST", "mailFuc.php", true); //send request to the server
            //thie will do the actual sending.Note,null is used bcos we r using get to send request to the server
            xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlHttp.onreadystatechange = handleServerResponsesendMail; //get the response from the server
            xmlHttp.send(dataString);
            //document.getElementById("disForm").innerHTML="Processing...";
        }

    } else {
        setTimeout("sendMail()", 500);
    }

}

function handleServerResponsesendMail() {
    //here the server sends back an xml file
    if (xmlHttp.readyState == 4) {
        if (xmlHttp.status == 200) {
            //var ajaxDisplay = document.getElementById('underInput');
            //ajaxDisplay.innerHTML = xmlHttp.responseText;
            var xmlResponse = xmlHttp.responseText; //this extrect the xml file from echo under foodsore.php
            // xmlDocumentElement=  xmlResponse.documentElement;
            //message = xmlDocumentElement.firstChild.data;
            //document.getElementById("disForm").innerHTML='<span style="color:blue">' +xmlResponse+ '</span>';
            //setTimeout("process()",500);
            // var logo = document.getElementById('showMailSending');
            //  logo.innerHTML=logo.style.display="none";
            if (xmlResponse == '"Mailer Error:".$mail->ErrorInfo') {
                //  document.location = "generalNav.html";
                alert('Mailer Error:.$mail->ErrorInfo');
                return;
            } else {
                alert(xmlResponse)
                    //document.getElementById("disForm").innerHTML='<span style="color:blue">' +xmlResponse+ '</span>';
            }
        } else {
            alert('Something Went Wrong');
        }
    }
}
//admin login function
function admin() { //if our object is ready to communicate with the server

    if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4) {

        // var fn = encodeURIComponent(document.getElementById("first_name").value);
        //var ln = encodeURIComponent(document.getElementById("last_name").value);
        // var conf = confirm("Are you sure, you want to vote "+name);
        // alert("voted");
        //return;
        var logo3 = document.getElementById("admin5");

        logo3.className = logo3.className.replace("windows", "cog");
        logo3.classList.add("fa-spin");
        var uname3 = document.getElementById('adUsername').value;
        var pass3 = document.getElementById('adminpassword').value;
        var dataString3 = 'Username3=' + uname3 + '&Passw3=' + pass3;
        if (uname3 = "" || pass3 == "") {
            alert("Please All fills Are Required");
            return;

        } else {
            xmlHttp.open("POST", "adminlogin.php", true); //send request to the server
            //thie will do the actual sending.Note,null is used bcos we r using get to send request to the server
            xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlHttp.onreadystatechange = handleServerResponse10; //get the response from the server
            xmlHttp.send(dataString3);
            //document.getElementById("disForm").innerHTML="Processing...";
        }

    } else {
        setTimeout("flogin()", 500);
    }

}

function handleServerResponse10() {
    //here the server sends back an xml file
    if (xmlHttp.readyState == 4) {
        if (xmlHttp.status == 200) {
            //var ajaxDisplay = document.getElementById('underInput');
            //ajaxDisplay.innerHTML = xmlHttp.responseText;
            var xmlResponse = xmlHttp.responseText; //this extrect the xml file from echo under foodsore.php
            // xmlDocumentElement=  xmlResponse.documentElement;
            //message = xmlDocumentElement.firstChild.data;
            //document.getElementById("disForm").innerHTML='<span style="color:blue">' +xmlResponse+ '</span>';
            //setTimeout("process()",500);
            var logo3 = document.getElementById('admin5');
            logo3.className = logo3.className.replace("cog", "windows");
            logo3.classList.remove("fa-spin");
            if (xmlResponse == 'Successful') {
                document.location = "fuadmin.php";
            } else {
                alert(xmlResponse)
                    //document.getElementById("disForm").innerHTML='<span style="color:blue">' +xmlResponse+ '</span>';
            }
        } else {
            alert('Something Went Wrong');
        }
    }
}
//HOD_DEAN assessment function
function HOD_DEAN() {
    //alert("hello");
    //return;
    var y = ""; //attendance to meetings
    var e = ""; //effective in teaching
    var r = ""; //regular to work
    var a = ""; //ability to take responsibility
    var t = ""; //TimelySubmission
    var p = ""; //participation at university
    var o = ""; //promt responds to memos
    var v = ""; // availability on campus
    //here, object that holds dwan is created.
    var hodDean = {
        //this object handles attendance to meetings
        attendace: function() {
            var x = document.getElementById("opt").value;
            if (x == 1) {
                y = 0.2
                return y;
            }
            if (x == 2) {
                y = 0.4
                return y;
            }
            if (x == 3) {
                y = 0.6
                return y;
            }
            if (x == 4) {
                y = 0.8
                return y;
            }
            if (x == 5) {
                y = 1
                return y;
            }

        }, //method handles attendance to meetings ending
        //start effective in teaching
        effective: function() {
            var x = document.getElementById("opt1").value;
            if (x == 1) {
                e = 0.2
                return e;
            }
            if (x == 2) {
                e = 0.4
                return e;
            }
            if (x == 3) {
                e = 0.6
                return e;
            }
            if (x == 4) {
                e = 0.8
                return e;
            }
            if (x == 5) {
                e = 1
                return e;
            }

        },
        //end effectives in teaching

        //start regular to work
        regular: function() {
            var x = document.getElementById("opt2").value;
            if (x == 1) {
                r = 0.2
                return r;
            }
            if (x == 2) {
                r = 0.4
                return r;
            }
            if (x == 3) {
                r = 0.6
                return r;
            }
            if (x == 4) {
                r = 0.8
                return r;
            }
            if (x == 5) {
                r = 1
                return r;
            }

        },
        //end regular to work

        //ability to take respons
        ability: function() {
            var x = document.getElementById("opt3").value;
            if (x == 1) {
                a = 0.2
                return a;
            }
            if (x == 2) {
                a = 0.4
                return a;
            }
            if (x == 3) {
                a = 0.6
                return a;
            }
            if (x == 4) {
                a = 0.8
                return a;
            }
            if (x == 5) {
                a = 1
                return a;
            }

        },
        //ability to take respns

        //start timelySubmission
        timelySubmission: function() {
            var x = document.getElementById("opt4").value;
            if (x == 1) {
                t = 0.2
                return t;
            }
            if (x == 2) {
                t = 0.4
                return t;
            }
            if (x == 3) {
                t = 0.6
                return t;
            }
            if (x == 4) {
                t = 0.8
                return t;
            }
            if (x == 5) {
                t = 1
                return t;
            }

        },
        //end timelySubmission

        //start participation at university
        partipationUniver: function() {
            var x = document.getElementById("opt5").value;
            if (x == 1) {
                p = 0.2
                return p;
            }
            if (x == 2) {
                p = 0.4
                return p;
            }
            if (x == 3) {
                p = 0.6
                return p;
            }
            if (x == 4) {
                p = 0.8
                return p;
            }
            if (x == 5) {
                p = 1
                return p;
            }

        },
        //end participation

        //prompt response to memos
        promtResoundsToMemos: function() {
            var x = document.getElementById("optt6").value;
            if (x == 1) {
                o = 0.2
                return o;
            }
            if (x == 2) {
                o = 0.4
                return o;
            }
            if (x == 3) {
                o = 0.6
                return o;
            }
            if (x == 4) {
                o = 0.8
                return o;
            }
            if (x == 5) {
                o = 1
                return o;
            }

        },
        //end promt respons

        //start availability on campus
        availabilityOnCampus: function() {
                var x = document.getElementById("opt7").value;
                if (x == 1) {
                    v = 0.2
                    return v;
                }
                if (x == 2) {
                    v = 0.4
                    return v;
                }
                if (x == 3) {
                    v = 0.6
                    return v;
                }
                if (x == 4) {
                    v = 0.8
                    return v;
                }
                if (x == 5) {
                    v = 1
                    return v;
                }

            }
            //end availability on campus
    }; //here, object that holds dean ends


    //this section send back to the web page 
    var Attend = hodDean.attendace();
    //alert(Attend); 
    attenda(Attend);
    var eff = hodDean.effective();
    //alert(eff);
    //call effectiv function here
    efectiv(eff);
    var reg = hodDean.regular();
    //alert(reg);
    regularrr(reg);
    var abi = hodDean.ability();
    //alert(abi);
    //call func ability
    abilityyy(abi);
    var timeSub = hodDean.timelySubmission();
    //alert(timeSub);
    //call timSu func
    timeSubbb(timeSub);
    var partiUniv = hodDean.partipationUniver();
    //alert(partiUniv);
    //call participation funct
    participatn(partiUniv);
    var promt = hodDean.promtResoundsToMemos();
    //alert(promt);
    //call promtresponds funct
    promptRespondss(promt);
    var avaCampus = hodDean.availabilityOnCampus();
    alert(avaCampus);
    //call avacm func
    availbityOCam(avaCampus);


}

//HOD_DEAN assessment function ends 
//create obj to hold everything
function attenda(At) {
    //alert(At);
};

//send sffectiv to db
function efectiv(ef) {
    //alert(ef);
};
//send reg to db
function regularrr(re) {
    //alert(re);
};
//send abilityy to db
function abilityyy(ab) {
    //alert(ab);
};
//send timeSub to db
function timeSubbb(tii) {
    //alert(tii);
};

function participatn(parr) {
    //alert(parr);
};

//send prompt to db
function promptRespondss(prrr) {
    //alert(prrr);
};
//send avaoncam to db
function availbityOCam(avaCamm) {
    //alert(avaCamm);
};

var alStff = "";
var Fa = "";
var deptm = "";
var courlevel = "";
loadCurs = "";
var NoOfStudent = "";
var ast = "";
//function to check for selected items workLoad()
function declearWorkLoad() {
    var ast = _("allStaff");
    alStff = ast.options[ast.selectedIndex].value;
    var fcr = _("Faacc");
    Fa = fcr.options[fcr.selectedIndex].value;
    var lof = _("loadFaacc");
    deptm = lof.options[lof.selectedIndex].value;
    var co = _("levelCC");
    courlevel = co.options[co.selectedIndex].value;
    var Curs = _("loadCurseee");
    loadCurs = Curs.options[Curs.selectedIndex].value;
    var x = _("creditUnit").value;
    var y = _("classSize").value;
    NoOfStudent = _("NoOfStu").value;
    if (alStff != 0) {
        if (Fa != 0) {
            if (deptm != 0) {
                if (courlevel != 0) {
                    if (loadCurs != 0) {
                        if (x != "") {
                            if (y != 0) {
                                if (NoOfStudent != "") {
                                    workLoad();
                                } else {
                                    alert("Provide Number Of Student In The Above Selected Department");
                                    return;
                                }
                            } else {
                                alert("Select Class Size");
                                return;
                            }
                        } else {
                            alert("Select Credit Unit");
                            return;
                        }
                    } else {
                        alert("Select Course");
                        return;
                    }
                } else {
                    alert("Select Level");
                    return;
                }
            } else {
                alert("Select Department");
                return;
            }
        } else {
            alert("Select Faculty");
            return;
        }
    } else {
        alert("Select Staff Number");
        return;
    }
    // workLoad();

}
//object wokLOd is created outside so that it can be accessed globally
var wokLOd = {
    credtUNnit: function() {
        var x = document.getElementById("creditUnit").value;
        if (x == 1) {
            //crediload1 = 0.5;
            return 0.5;
        }
        if (x == 2) {
            //crediload2 = 1;
            return 1;
        }
        if (x == 3) {
            //crediload3 = 1.5;
            return 1.5;
        }
    },

    //computation for class size
    classSizzee: function() {
        var x = document.getElementById("classSize").value;
        if (x == "0-50") {
            //clasize50 = 0.5;
            return 0.5;
        }
        if (x == "51-100") {
            //clasize100 = 1;
            return 1;
        }
        if (x == "101-200") {
            //clasize200 = 1.5;
            return 1.5;
        }
        if (x == "201 and Above") {
            //clasize201AndAbove = 2;
            return 2;
        }
    }


}; //end of obj wokLod


//workload function is created
function workLoad() {


    //alert(alStff);
    // var Fa = _("Faacc").value;
    //alert(Fa);
    // var deptm = _("loadFaacc").value;
    //alert(deptm);
    // var courlevel = _("levelCC").value;
    // alert(courlevel);
    // var loadCurs = _("loadCurseee").value;
    //alert(loadCurs);
    var ans1 = wokLOd.credtUNnit()
        //alert(ans1);
    var ans2 = wokLOd.classSizzee();
    //alert(ans2);
    // alert(NoOfStudent);
    //call the loader here
    _("modalLoader").style.display = "block";
    var dataStr9 = 'alStf=' + alStff + '&FaC=' + Fa + '&dept=' + deptm + '&colevel=' + courlevel + '&loadCus=' + loadCurs + '&Creunitr=' + ans1 + '&classSize=' + ans2 + "&NoOfStu=" + NoOfStudent;
    var xhttp;
    xhttp = new XMLHttpRequest();
    // file = new FormData;
    // file.append('file', fileUptic[0]);
    xhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            //alert('new');
            // exit();
            // cFunction(this); //cFunction(xhttp)
            // document.getElementById("loadFaacc").innerHTML = this.responseText;
            _("modalLoader").style.display = "none";
            var response = this.responseText;
            if (response != "") {
                //   _('ggfg').innerHTML = response;
                alert(response);
            } else {
                // alert("Sorry, There Are No Department In that Faculty");
            }
            //alert(this.XMLrespondsText);
        }
    }; //end of xhttp object 
    xhttp.open("POST", "PHP/workLoad.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(dataStr9);



} //end of workLoad() function
//function to check for selected items congnateExperience()
function selectedCognate() {
    var x = document.getElementById("institutn").value;
    var y = document.getElementById("postMastic").value;
    if (x == "" && y == "") {
        alert("Institution/Post Masters needs to be select");
        return;
    } else {
        congnateExperience();
    }
}
//function that controls congnateExperience()
function congnateExperience() {
    //let create an object to control congnateExperience
    var univer = "";
    var otherTerInst = "";
    var postMasticc = "";
    var otherPaperss = "";
    var cognatExpp = {
        cognateExpUnuversity: function() {
            var x = document.getElementById("institutn").value;
            if (x == "Univeraity") {
                univer = 1;
                return univer;
            }
            if (x == "Other Tetiary Institution") {
                otherTerInst = 0.5;
                return otherTerInst;
            }
        }, //end of cognateExpUnuversity method

        postMasterss: function() {
                var x = document.getElementById("postMastic").value;
                if (x == "PostMasters") {
                    postMasticc = 0.5;
                    return postMasticc;
                }
                if (x == "Other Papers") {
                    otherPaperss = 0.5;
                    return otherPaperss;
                }
            } //end of postMasters Method
    }; //end of cognatExpp obj
    //dislay of related result
    var instuu = cognatExpp.cognateExpUnuversity();
    alert(instuu);
    var postMaztaz = cognatExpp.postMasterss();
    alert(postMaztaz);
} //end of congnateExperience() function

//XHTTP CALL BACK FUNCTION FOR MY AJAX 
//XHTTP CALL BACK FUNCTION FOR MY AJAX 
/*With many ajax function, i create function to XMLHttpRequest object,
one callback function for each ajax task.
*/

//loadDoc("url", myFunction);
//loadDoc("loadFaculty.php", loadFaculttyy);
//loadDoc();
/*function loadDoc(url, cFunction) {
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            cFunction(this); //cFunction(xhttp)
        }
    }; //end of xhttp object 

    xhttp.open("GET", url, true);
    xhttp.send();
} //end of loadDoc function
*/

/*
    function loadFacultyDoc() {
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //cFunction(this); //cFunction(xhttp)
                document.getElementById("loadFaacc").innerHTML =
                    xhttp.responseText;
            }
        }; //end of xhttp object 

        xhttp.open("GET", "loadFaculty.php", true);
        xhttp.send();
    } //end of loadDoc function*/



///////////////////////////////////////////
////////////////////////////////////////////////all leave manager computation is found  here
function leaveMaCompu() {
    var getStaid = _("stafidd").value;
    var getCurentDate = _("cudate").value;
    var getfutreDate = _("futdate").value;
    if (getStaid != "0") {
        if (getCurentDate != "") {
            if (getfutreDate != "") {
                var dtStrgG = 'staffid=' + getStaid + '&getCurDate=' + getCurentDate + '&getfuDate=' + getfutreDate;
                var xhttp;
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        // document.getElementById("loadFaacc").innerHTML = this.responseText;
                        // _("modalLoaderSpin").style.display = "none";
                        var response = this.responseText;
                        if (response == "") {
                            // window.location = "adminMarket.php";
                            alert(response);
                        } else {
                            // alert("Sorry, There Are No Department In that Faculty");
                            alert(this.responseText);
                        }
                        //alert(this.XMLrespondsText);
                    }
                }; //end of xhttp object 

                xhttp.open("POST", "PHP/computatnOfLeave.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send(dtStrgG);
            } else {
                alert("Provide Future Date");
            }
        } else {
            alert("Provide Current Date");
        }
    } else {
        alert("select Staff Number");
    }
}
//////////////////////////////////////////
////////////////////////////////
function loadFaculttyy(xhttp) {
    // action goes here
    document.getElementById("demo").innerHTML =
        xhttp.responseText;
}

//XHTTP CALL BACK FUNCTION FOR MY AJAX ends here

//function to be called by the webPage button
function conferenzFunc() {
    //alert("hello");
    var x = document.getElementById("avitityct").value;
    // var y = document.getElementById("classSize").value;
    if (x == "") {
        alert("Conference needs to be selected");
        return;
    } else {
        conferenzFunccc();
    }
}

//object  to handle conference & learned societies
var confereceLearnedSocieActiv = {
    confereczzz: function() {
        var x = document.getElementById("avitityct").value;
        if (x == "Conference") {
            // var t = 0.5;
            return 0.5;
        }
        if (x == "Membership") {
            return 0.5;
        }
    }, //end of confereczzz
}; //end of confereceLearnedSocieActiv object

// conferenzFunccc() is called here
function conferenzFunccc() {
    var conff = confereceLearnedSocieActiv.confereczzz();
    alert(conff);
};
//check to b sure the user click dean
function ddDeanSsshipp() {
    //alert("hello");
    //exit();
    // var x = document.getElementById("sosc").value;
    var x = document.getElementById("denoship").value;
    if (x == "") {
        alert("Please choose faculty and schools");
        return;
        //alert("hello")
    } else {
        // conferenzFunccc();
    }
}
//check to b sure the user click lab organization
function labOrganZZ() {
    //alert("hello");
    //return;
    var x = document.getElementById("naofOrgan").value;
    var trimx = x.trim();
    if (trimx == "") {
        alert("please fill name organization");
        return;
    } else {
        labOrgaaa();
    }
}
//check to b sure the user click membershipOfUniversity
function memUnivCommitee() {
    //alert("hello");
    //exit();
    var x = document.getElementById("membOfUniv").value;
    if (x == "") {
        alert("please provide committee");
        return;
    } else {
        centerPlacezz();
    }
}
//function centerIod() start
function centerIood() {
    var x = document.getElementById("centroid").value;
    if (x == "") {
        alert("Please provide Center ");
        return;
    } else {
        centerdeBar();
    }
}
//function otherUniverServicezz() start
function otherUniverServicezz() {
    var x = document.getElementById("namofser").value;
    if (x == "") {
        alert("Please provide Name of Service ");
        return;
    } else {
        serName4();
    }
}
//function callSIWESFun() start
function callSIWESFun() {
    var x = document.getElementById("capaci").value;
    if (x == "") {
        alert("Please provide Capacity ");
        return;
    } else {
        SIWESNamee();
    }
}
//function calorOdinateSa() start
function calorOdinateSa() {
    var x = document.getElementById("program").value;
    if (x == "") {
        alert("Please provide Program ");
        return;
    } else {
        funOrOdinateee();
    }
}
//function haallMmastters() start
function haallMmastters() {
    var x = document.getElementById("halmast").value;
    if (x == "") {
        alert("Please provide Hall Name ");
        return;
    } else {
        mMasterHass();
    }
}
//function aassoocciateDeanShiiip() start
function aassoocciateDeanShiiip() {
    var x = document.getElementById("deepptt").value;
    if (x == "") {
        alert("Please provide Department");
        return;
    } else {
        acoitDeenSsipp();
    }
}
//function sStudentAAdvisorshipp() start
function sStudentAAdvisorshipp() {
    var x = document.getElementById("studAdvy").value;
    var x1 = x.trim();
    if (x1 == "") {
        alert("Please provide Department");
        return;
    } else {
        ssSSttuddentAAddvisorsshippp();
    }
}
//function headShip() start
function hheaddSshipp() {
    var x = document.getElementById("heshipp").value;
    var x1 = x.trim();
    if (x1 == "") {
        alert("Please provide Department");
        return;
    } else {
        callheadShipppp();
    }
}
//object for university administration is created from here
var universityAdministratnn = {
    ddeanShipp: function() {
        var x = document.getElementById("denoship").value;
        if (x == "SEET") {
            return 1;
        }
        if (x == "SOHT") {
            return 1;
        }
        if (x == "SMAT") {
            return 1;
        }
        if (x == "SOSC") {
            return 1;
        }
    }, //end of Deanship method
    //lab orgianisation method
    labOrgainzation: function() {
        var lab = document.getElementById("naofOrgan").value;
        if (lab !== "") {
            return 1;
        }
    },
    //membershipOfUniversity method
    membershipOfUniversity: function() {
        var membOfUnivv = document.getElementById("membOfUniv").value;
        if (membOfUnivv !== "") {
            return 1;
        }
    }, //end membershipOfUniversity method
    //directorShip method start
    directorShipp: function() {
        var centerrName = document.getElementById("centroid").value;
        if (centerrName !== "") {
            return 1;
        }
    }, //directorShip method end
    //other UniversityServices method
    UniversityServices: function() {
        var nameOfservii = document.getElementById("namofser").value;
        if (nameOfservii !== "") {
            return 1;
        }
    },

    //other SIWES method
    SIWES: function() {
        var capacitySIWES = document.getElementById("capaci").value;
        if (capacitySIWES !== "") {
            return 1;
        }
    },

    //other coOrdinatorShip() method
    coOrdinatorShip: function() {
        var coOrd5 = document.getElementById("program").value;
        if (coOrd5 !== "") {
            return 1;
        }
    },
    //other associatedDeanshippp() method
    associatedDeanshippp: function() {
        var asociateDeenP = document.getElementById("deepptt").value;
        if (asociateDeenP !== "") {
            return 1;
        }
    },
    //other hallLMasterShipp method
    hallLMasterShipp: function() {
        var halMass = document.getElementById("halmast").value;
        if (halMass == "Chairman") {
            return 1;
        }
        if (halMass == "Secretary") {
            return 1;
        }
        if (halMass == "Member") {
            return 1;
        }
        if (halMass == "Others") {
            return 1;
        }
    },
    //other studentAdvisorship method
    studentAdvisorship: function() {
        var adviseStudAdvy = document.getElementById("studAdvy").value;
        if (adviseStudAdvy !== "") {
            return 1;
        }
    },
    //headShip method
    headShip: function() {
        var esshiippp = document.getElementById("heshipp").value;
        if (esshiippp !== "") {
            return 1;
        }
    },
}; //end of universityAdministratnn object
//universityAdministratnn module
//function that calls labOrgaaa() for display
function labOrgaaa() {
    var labbb = universityAdministratnn.labOrgainzation();
    alert(labbb);
}
//function that will displa memberOfUniversity and
function memComitteee() {
    var memUnnn = universityAdministratnn.membershipOfUniversity();
    alert(memUnnn);
}
//function that will displa Center and
function centerdeBar() {
    var centyDe = universityAdministratnn.directorShipp();
    alert(centyDe);
}
//function that will displa other university services and
function serName4() {
    var univermaenDe = universityAdministratnn.UniversityServices();
    alert(univermaenDe);
}
//function that will display SIWES and
function SIWESNamee() {
    var siwessy = universityAdministratnn.SIWES();
    alert(siwessy);
}
//function that will display coOrdinattor
function funOrOdinateee() {
    var coOrdiii = universityAdministratnn.coOrdinatorShip();
    alert(coOrdiii);
}
//function that will display acoitDeenSsipp()
function acoitDeenSsipp() {
    var cdeenn = universityAdministratnn.associatedDeanshippp();
    alert(cdeenn);
}
//function that will display   mMasterHass()
function mMasterHass() {
    var asterHall = universityAdministratnn.hallLMasterShipp();
    alert(asterHall);
}
//function that will display  ssSSttuddentAAddvisorsshippp()
function ssSSttuddentAAddvisorsshippp() {
    var asterHalladvisorS = universityAdministratnn.studentAdvisorship();
    alert(asterHalladvisorS);
}
//function that will display  callheadShipppp()
function callheadShipppp() {
    var hecalSip = universityAdministratnn.headShip();
    alert(hecalSip);
}
//all abt publications

//function that JournalNalism() called
function JournalNalism() {
    // alert("helo");
    // exit();
    var xAuth = document.getElementById("aurthot").value;
    var ySc = document.getElementById("scoreZZzz").value;
    var paperX = document.getElementById("paperCconf").value;
    var scorey1 = document.getElementById("paperScoreZZ").value;
    if (xAuth == "" && ySc == "" && paperX == "" && scorey1 == "") {
        alert("Please select Sole or Joint Author for both Jornalism and Paper")
        return;
    } else {
        callJournalNalismFu();
        callpaperConferencefu();
    }
}


var publicationObj = {
        //jornal 
        journalll: function() {
            var x = document.getElementById("aurthot").value;
            var y1 = document.getElementById("scoreZZzz").value;
            if (x == "Sole Author") {
                return y1;
            }
            if (x == "Joint Author") {
                var jathInt = parseInt(y1); //convert core to int
                //var ansJAhor = jathInt * 0.6;
                // var ansToString = ansJAhor.toString;
                //return ansToString;
                return jathInt * 0.6;
                // return 1;
            }
        },
        //paper/ conference method
        paperConferenceTitle: function() {
            var paperX = document.getElementById("paperCconf").value;
            var scorey1 = document.getElementById("paperScoreZZ").value;
            if (paperX == "Sole Author") {
                return scorey1;
            }
            if (paperX == "Joint Author") {
                var paperCofInt = parseInt(scorey1); //convert core to int
                //var ansJAhor = jathInt * 0.6;
                // var ansToString = ansJAhor.toString;
                //return ansToString;
                return paperCofInt * 0.6;
                // return 1;
            }
        },
    } //end of publicationObj
    //all display function of publiction
function callJournalNalismFu() {
    var cjou = publicationObj.journalll();
    alert(cjou);
}
//function  callpaperConferencefu()
function callpaperConferencefu() {
    var cpaperRRR = publicationObj.paperConferenceTitle();
    alert(cpaperRRR);
}
//this function loadDepptt(this.value) loads dept when gets called
/*function loadDepptt(str) {
    if (str == "") {
        document.getElementById("lodDeept").innerHTML = "";
        return;
    }
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    //alert('helo');
    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // document.getElementById("loadFaacc").innerHTML = this.responseText;
                var XMLrespondsText = this.responseText;
                //alert('helo');
                if (XMLrespondsText == "successful") {
                    alert("run");
                } else {
                    alert(xmlResponse)
                }
            }
        }
        //alert('helo');
    xmlhttp.open("GET", "loadDepartment.php?q=" + str, true);
    xmlhttp.send();

}*/
//////////////////////////////////////////////////////////////////////////////////////
//this function will send resquest to loadDepartment.php and get back the response in fworkLoad.php file 
function loadDepptt(str) {

    //alert(str);
    //exit();
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        //alert(this.status);
        if (this.readyState == 4 && this.status == 200) {
            //alert('new');
            // exit();
            // cFunction(this); //cFunction(xhttp)
            // document.getElementById("loadFaacc").innerHTML = this.responseText;
            var response = this.responseText;
            if (!response == "") {
                document.getElementById("loadFaacc").innerHTML = this.responseText;
                // document.getElementById("  daptyu").innerHTML = this.responseText;

            } else {
                alert("Sorry, There Are No Department In that Faculty");
            }
            // alert(XMLrespondsText);
        }
    }; //end of xhttp object 

    xhttp.open("GET", "PHP/loadDepartment.php?q=" + str, true);
    xhttp.send();
} //end of loadDoc function
/////load the department in fworkInfo2
//this function will send resquest to loadDepartment.php and get back the response in fworkLoad.php file
function loadDepFwok(str) {

    // alert(str);
    // exit();
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        //alert(this.status);
        if (this.readyState == 4 && this.status == 200) {
            //alert('new');
            // exit();
            // cFunction(this); //cFunction(xhttp)
            // document.getElementById("loadFaacc").innerHTML = this.responseText;
            var response = this.responseText;
            if (!response == "") {
                // document.getElementById("loadFaacc").innerHTML = this.responseText;
                document.getElementById("daptyu").innerHTML = this.responseText;

            } else {
                alert("Sorry, There Are No Department In that Faculty");
            }
            // alert(XMLrespondsText);
        }
    }; //end of xhttp object 

    xhttp.open("GET", "PHP/loadDepartment.php?q=" + str, true);
    // alert(str);
    //  exit();
    xhttp.send();
} //end of loadDoc function
//////////////////////////////////////////////////////////////////////////////////
//this function will send resquest to leavemanager1.php and get back the response 
function facty(str) {

    // alert(str);
    // exit();
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        //alert(this.status);
        if (this.readyState == 4 && this.status == 200) {
            //alert('new');
            // exit();
            // cFunction(this); //cFunction(xhttp)
            // document.getElementById("loadFaacc").innerHTML = this.responseText;
            var response = this.responseText;
            if (!response == "") {
                // document.getElementById("loadFaacc").innerHTML = this.responseText;
                document.getElementById("loadDeptmatiz").innerHTML = this.responseText;

            } else {
                alert("Sorry, There Are No Department In that Faculty");
            }
            // alert(XMLrespondsText);
        }
    }; //end of xhttp object 

    xhttp.open("GET", "PHP/loadDepartment.php?q=" + str, true);
    // alert(str);
    //  exit();
    xhttp.send();
} //end of loadDoc function
////////////////////////////////////////////////////////////////
//function that will load faculty automatically on faculty select button

function loadFacutyyyyy() {

    //alert(str);
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            //alert('new');
            // exit();
            // cFunction(this); //cFunction(xhttp)
            document.getElementById("Faacc").innerHTML = this.responseText;
            // alert(XMLrespondsText);
        }
    }; //end of xhttp object 

    xhttp.open("GET", "PHP/loadFaculty.php", true);
    xhttp.send();
} //end of loadFacutyyyyy function

///////////////////////////////////////////////////
//get both the id and department name from fworkLoad.php using getIDNDepart() function
//let declare global varble here so we use it for db computation
var valueOnly = "";
var deptNameOnly = "";

function getIDNDepart() {
    // alert("am working");
    //exit();

    var x = _("loadFaacc");
    valueOnly = x.options[x.selectedIndex].value;
    deptNameOnly = x.options[x.selectedIndex].text;
    // alert(valueOnly);
    // alert(deptNameOnly);
}
///found in fworkInfo2.php file
var workInforMM = {
    staffNo: function() {
        var stfNo = document.getElementById("stafno").value;
        return stfNo;
    },
    dateOfAsumDuty: function() {
        var asD = document.getElementById("assumD").value;

        return asD;

    },
    dateOfRaticTn: function() {
        var ratyDA = document.getElementById("ratifyDA").value;

        return ratyDA;

    },
    dateOfConfAppont: function() {
        var cofirm = document.getElementById("confirmDAP").value;

        return cofirm;

    },

    rankPresentStatus: function() {
        var rPS = document.getElementById("preStat").value;
        if (rPS == "Professor") {
            return 7
        }
        if (rPS == "Reader") {
            return 6
        }
        if (rPS == "Senior Lecturer") {
            return 5
        }
        if (rPS == "Lecturer 1") {
            return 4
        }
        if (rPS == "Lecturer 2") {
            return 3
        }
        if (rPS == "Assistant Lecturer") {
            return 2
        }
        if (rPS == "Graduate Assistant") {
            return 1
        }
    },

};
//this function will call all date from fworkInfo2.php to db
function workInfoDB() {
    //alert("am working");
    //return;

    var dofA = workInforMM.dateOfAsumDuty();

    var dofcoA = workInforMM.dateOfConfAppont();
    var doRa = workInforMM.dateOfRaticTn();
    var deptX = _("daptyu").value;
    var prSeNtat = workInforMM.rankPresentStatus();
    var facutyic = _("facutic").value;
    var stafNo = workInforMM.staffNo();
    var statOfApt = _("stOfApp").value;
    var stepsX = _("stepTR").value;

    if (stafNo != "") {
        if (dofA != "") {
            if (doRa != "") {
                if (dofcoA != "") {
                    if (statOfApt != 0) {
                        if (facutyic != 0) {
                            if (prSeNtat != "") {
                                if (stepsX != "") {
                                    if (deptX != 0) {

                                        var dAtSrng = 'doAA=' + dofA + '&dfo=' + dofcoA + '&AAdr=' + doRa + '&dIIX=' + deptX + '&prSyt=' + prSeNtat + '&facup=' + facutyic + '&stGNo=' + stafNo + "&staPP=" + statOfApt + "&stYsX=" + stepsX;
                                        var xhttp;
                                        xhttp = new XMLHttpRequest();
                                        xhttp.onreadystatechange = function() {

                                            if (this.readyState == 4 && this.status == 200) {
                                                //alert('new');
                                                // exit();
                                                // cFunction(this); //cFunction(xhttp)
                                                // document.getElementById("loadFaacc").innerHTML = this.responseText;
                                                var response = this.responseText;
                                                if (response != "") {
                                                    alert(response);
                                                } else {
                                                    // alert("Sorry, There Are No Department In that Faculty");
                                                }
                                                //alert(this.XMLrespondsText);
                                            }
                                        }; //end of xhttp object 

                                        xhttp.open("POST", "PHP/workInfoServer.php", true);
                                        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                        //alert(dataString);
                                        xhttp.send(dAtSrng);

                                    } else {
                                        alert("Please Provide Deparment");
                                        return;
                                    }
                                } else {
                                    alert("Please Provide Steps");
                                    return;
                                }
                            } else {
                                alert("Please Provide Present Status");
                                return;
                            }
                        } else {
                            alert("Please Provide Faculty");
                            return;
                        }
                    } else {
                        alert("Please Provide Status Of appointment");
                        return;
                    }
                } else {
                    alert("Please Provide Of Confirmation Of Appointment");
                    return;
                }
            } else {
                alert("Please Provide Date Of Ratification of Appointment");
                return;
            }
        } else {
            alert("Please Provide Date Of Assumption Of Duties");
            return;
        }
    } else {
        alert("Please Provide Staff Number");
        return;
    }

}

function leaveManagerrrr() {
    //all of this data will be sent to db to form leavemanager table
    // alert('am working ooo');
    //exit(); 
    var getAgeFrPerD = age_pD; //age ready to be sent to db
    var coRREEENN = academicBackgroundzZZ.COREN(); //coren ready to be sent to db
    var mengRR = academicBackgroundzZZ.M_ENG(); //M.Engr ready to db
    var phdPHDPhD = academicBackgroundzZZ.PHD(); //phd ready to be sent to db
    var staffo = leavmar.staffNo(); //stafno ready to go to db
    // alert(staffo);
    var prestauS = leavmar.rankPresentStatus(); //present status ready to be sent to db
    //alert(prestauS);
    var stepZZ = leavmar.stepOrTOR(); //present status to db
    //alert(stepZZ);
    if (getAgeFrPerD != "" && coRREEENN != "" && mengRR != "" && phdPHDPhD != "" && staffo != "" && prestauS != "" && stepZZ != "") {
        var datStrng = 'gAge=' + getAgeFrPerD + '&corenn=' + coRREEENN + '&meng=' + mengRR + '&phdd=' + phdPHDPhD + '&stNO=' + staffo + '&prestat=' + prestauS + '&rank=' + stepZZ;
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200) {
                //alert('new');
                // exit();
                // cFunction(this); //cFunction(xhttp)
                // document.getElementById("loadFaacc").innerHTML = this.responseText;
                //var response = this.responseText;
                if (response != "") {
                    alert(response);
                } else {
                    // alert("Sorry, There Are No Department In that Faculty");
                }
                //alert(this.XMLrespondsText);
            }
        }; //end of xhttp object 

        xhttp.open("POST", "PHP/leaveMManagerr.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        //alert(dataString);
        xhttp.send(datStrng);
    }
}
//when this function is called by courServer() function from fwork.php file, load course from course table.
function courServer() {
    var x = _("levelCC");
    var valueLevel = x.options[x.selectedIndex].value;
    var deptValuOnlyy = valueOnly;
    // alert(deptValuOnlyy);
    //exit();
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        // alert(this.status);
        if (this.readyState == 4 && this.status == 200) {
            //alert('new');
            // exit();
            // cFunction(this); //cFunction(xhttp)
            _("loadCurseee").innerHTML = this.responseText;
            //var response = this.responseText;
            //alert(response);
            /* if (!response == "") {
                 document.getElementById("loadFaacc").innerHTML = this.responseText;
             } else {
                 alert("Sorry, There Are No Department In that Faculty");
             }
             // alert(XMLrespondsText);*/
        }
    }; //end of xhttp object 
    //"vote.php?id="+id+"&name="+name
    xhttp.open("GET", "PHP/loadCourse.php?q1=" + valueLevel + "&deptNo=" + deptValuOnlyy, true);
    // alert(valueLevel);
    //alert(deptValuOnlyy);
    //exit();
    xhttp.send();
    // var levelCC = x.options[x.selectedIndex].text;
    //alert(valueLevel);
}
//////////////////////////////
//object that controls all input and selection from fpersonaldetails1.php file
//age is globally declared to help send it to db
var age_pD = "";
var personalDetailsZ = {
    age_personalDetails: function() {
        age_pD = kk;
        if (age_pD == "") {
            alert("Please Provide Age");
            return;
        } else {
            return age_pD;
        }
    },
};
//function that button from fpersonaldetails1.php uses
function persDetailzZxx() {

    //alert("am working");
    //exit();
    var fName = _("firname").value;
    var mName = _("midnamM").value;
    var suName = _("suNmesZ").value;
    var gendM = _("geDD").value;
    var maryStatus = _("mStatuZZ").value;
    var noOfChildren = _("noOCh").value;
    var nationNalty = _("natonty").value;
    var getAge = _("agePerdd").value;
    var phonNum = _("phonNum").value;
    var emailAdd = _("emaiL").value;
    if (fName != "") {
        if (mName != "") {
            if (suName != "") {
                if (gendM != "") {
                    if (maryStatus != "") {
                        if (noOfChildren != "") {
                            if (nationNalty != "") {
                                if (getAge != "") {
                                    if (phonNum != "") {
                                        if (emailAdd != "") {
                                            // var dataString = 'Username=' + uname + '&Passw=' + pass;
                                            var dataString = 'FN=' + fName + '&MN=' + mName + '&SN=' + suName + '&GD=' + gendM + '&maryS=' + maryStatus + '&noOfChil=' + noOfChildren + '&nationNaty=' + nationNalty + '&geAge=' + getAge + '&phonNum=' + phonNum + '&emsername=' + emailAdd;
                                            // alert(sTr);
                                            //exit();
                                            var xhttp;
                                            xhttp = new XMLHttpRequest();
                                            xhttp.onreadystatechange = function() {

                                                if (this.readyState == 4 && this.status == 200) {
                                                    //alert('new');
                                                    // exit();
                                                    // cFunction(this); //cFunction(xhttp)
                                                    // document.getElementById("loadFaacc").innerHTML = this.responseText;
                                                    var response = this.responseText;
                                                    if (response != "") {
                                                        alert(response);
                                                    } else {
                                                        // alert("Sorry, There Are No Department In that Faculty");
                                                    }
                                                    //alert(this.XMLrespondsText);
                                                }
                                            }; //end of xhttp object 

                                            xhttp.open("POST", "PHP/personDDEtai.php", true);
                                            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                            //alert(dataString);
                                            xhttp.send(dataString);


                                        } else {
                                            alert("Plaese Provide Email");
                                            return;
                                        }
                                    } else {
                                        alert("Plaese Provide Phone Number");
                                        return;
                                    }
                                } else {
                                    alert("Please Provide Age");
                                    return;
                                }
                            } else {
                                alert("Plaese Provide Nationality");
                                return;
                            }
                        } else {
                            alert("Plaese Provide Number of Children");
                            return;
                        }
                    } else {
                        alert("Plaese Provide Marital Status");
                        return;
                    }
                } else {
                    alert("Plaese Provide Gender");
                    return;
                }
            } else {
                alert("Plaese Provide Middle Name");
                return;
            }
        } else {
            alert("Plaese Provide Middle Name");
            return;
        }
    } else {
        alert("Plaese Provide First Name");
        return;
    }

}
///////////////////////////
//object that controls all input and selection from facademicBackgroung1.php file
var academicBackgroundzZZ = {
    cerTificate: function() {
        var cetafi = _("chcert").value;
        return cetafi;
    },
    futoInstitution: function() {
        var insti = _("inStuty").value;
        return insti;
    },
    stDated: function() {
        var sdat = _("stTime").value;
        return sdat;
    },
    finishDated: function() {
        var finidat = _("fiSt").value;
        return finidat;
    },
    getFieldOdSpe: function() {
        var fgetFied = _("fieldBa").value;
        return fgetFied;
    },
    areaOfSpeciliztn: function() {
        var areofSpp = _("aop").value;
        return areofSpp;
    },
    COREN: function() {
        var coEN = _("coreNNID").value;
        if (coEN == "Yes") {
            return 1;
        }
        if (coEN == "No") {
            return 0;
        }
    },
    M_ENG: function() {
        var menGG = _("menggg").value;
        if (menGG == "Yes") {
            return 1;
        }
        if (menGG == "No") {
            return 0;
        }

    },
    PHD: function() {
        var pphhdd = _("phHdPP").value;
        if (pphhdd == "Yes") {
            return 1;
        }
        if (pphhdd == "No") {
            return 0;
        }

    },
};
//function that button from facademicBackgroung1.php uses


function acaBackgroung() {
    // alert("am working");
    var acabacBB = academicBackgroundzZZ.COREN();
    //alert(acabacBB);
    //return;
    //return;
    var mengT = academicBackgroundzZZ.M_ENG();
    //alert(mengT);
    var phdYN = academicBackgroundzZZ.PHD();
    //alert(phdYN);
    //return;
    var certF = academicBackgroundzZZ.cerTificate();
    var aOS = academicBackgroundzZZ.areaOfSpeciliztn();
    // alert(mengT);
    var strDat = academicBackgroundzZZ.stDated();
    var fdate = academicBackgroundzZZ.finishDated();
    var instuy = academicBackgroundzZZ.futoInstitution();
    var gfoSP = academicBackgroundzZZ.getFieldOdSpe();
    var imag = _("filed").value;
    if (certF != "") {
        if (instuy != "") {
            if (strDat != "") {
                if (fdate != "") {
                    if (gfoSP != "") {
                        if (aOS != "") {
                            var data = new FormData();
                            data.append("file1", document.querySelector("#filed").files[0]); //get the image file from here
                            data.append("coRin", acabacBB);
                            data.append("meg", mengT);
                            data.append("phd", phdYN);
                            data.append("cefiti", certF);
                            data.append("aospes", aOS);
                            data.append("sdat", strDat);
                            data.append("fdet", fdate);
                            data.append("instp", instuy);
                            data.append("fioS", gfoSP);

                            var xhttp;
                            xhttp = new XMLHttpRequest();
                            // file = new FormData;
                            // file.append('file', fileUptic[0]);
                            xhttp.onreadystatechange = function() {

                                if (this.readyState == 4 && this.status == 200) {
                                    //alert('new');
                                    // exit();
                                    // cFunction(this); //cFunction(xhttp)
                                    // document.getElementById("loadFaacc").innerHTML = this.responseText;
                                    var response = this.responseText;
                                    if (response != "") {
                                        //   _('ggfg').innerHTML = response;
                                        alert(response);
                                    } else {
                                        // alert("Sorry, There Are No Department In that Faculty");
                                    }
                                    //alert(this.XMLrespondsText);
                                }
                            }; //end of xhttp object 
                            xhttp.open("POST", "PHP/academicBackground.php", true);
                            //  xhttp.open("POST", "PHP/testing.php", true);

                            //xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                            //alert(dataString);

                            xhttp.send(data);
                        } else {
                            alert("Please choose Your Area Of Specialization");
                            return;
                        }
                    } else {
                        alert("Please choose Your Filed Of Specialization");
                        return;
                    }



                } else {
                    alert("Please choose Finish Date");
                    return;
                }
            } else {
                alert("Please choose Start Date");
                return;
            }
        } else {
            alert("Please choose Institution");
            return;
        }
    } else {
        alert("Please choose certificate to upload");
        return;
    }


}
///////////////////////////////////////////////Everything About LeaveManager Start Here
//Required Staff Mix
//function requiredStaffMixL1(n) is number of rquired staff in Lecture I category i.e those with rank_id 1-4
function requirStaffMixL1(n) {
    // var u = computationOfStaffMix.requiredStaffMixL1(300);
    //alert(u);
    var L1 = "";
    //n is the number of student in a dept
    // var n = "";
    L1 = (9 * n / 300); //done with L1
    // return L1;
    alert(L1);
}
//function requiredStaffMixL1(n)  is number of rquired staff in senior Lecturer category i.e those with rank_id 5
function requStaffMixS1(n) {
    // var n = ""; //n is the number of student in a dept
    var S1 = "";
    S1 = (7 * n) / 300;
    // return S1;
    alert(S1);
}
//function requiredStaffMixP1(n) is number of rquired staff in prof/reader category i.e those with rank_id 6 -7
function reqquuiirrdStaffMixP1(n) {
    // var n = ""; //n is the number of student in a dept
    var P1 = "";
    P1 = n / 75;
    // return P1;
    alert(P1);
}
//function to that will query noOfStudent in a department from workLoad_tb. The function runs automatically
var noOfStudentPerStaNo = "";
(

    function getNumOfStuFrmWorkLoadTab() {
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            //alert(this.status);
            //return;

            if (this.readyState == 4 && this.status == 200) {
                //alert('new');
                // exit();
                // cFunction(this); //cFunction(xhttp)
                // document.getElementById("loadFaacc").innerHTML = this.responseText;
                // var responsses = this.responseText;
                // if (!response == "") {
                // document.getElementById("me").innerHTML = this.responseText;
                noOfStudentPerStaNo = this.responseText;
                // alert(selectedL1234);

                // document.getElementById("daptyu").innerHTML = this.responseText;
                // return responsses;
                // } else {
                // alert("Sorry, There Are No Department In that Faculty");
                // }
                // alert(XMLrespondsText);
            }
        }; //end of xhttp object 

        xhttp.open("GET", "PHP/getNumOfStuFrWorkLoadTable.php", true);
        xhttp.send();
    }
)();

function ally() {
    // _("loader").style.display = "block";
    // requirStaffMixL1(noOfStudentPerStaNo);
    //requStaffMixS1(noOfStudentPerStaNo);
    //reqquuiirrdStaffMixP1(noOfStudentPerStaNo);
}
//function that holds L1234 and every other value of L1234
var selectedL1234 = "";
(

    function L12334() {

        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            //alert(this.status);
            //return;

            if (this.readyState == 4 && this.status == 200) {
                //alert('new');
                // exit();
                // cFunction(this); //cFunction(xhttp)
                // document.getElementById("loadFaacc").innerHTML = this.responseText;
                // var responsses = this.responseText;
                // if (!response == "") {
                // document.getElementById("me").innerHTML = this.responseText;
                selectedL1234 = this.responseText;
                // alert(selectedL1234);

                // document.getElementById("daptyu").innerHTML = this.responseText;
                // return responsses;
                // } else {
                // alert("Sorry, There Are No Department In that Faculty");
                // }
                // alert(XMLrespondsText);
            }
        }; //end of xhttp object 

        xhttp.open("GET", "PHP/currentStaffMixSL1234.php", true);
        // alert(str);
        //  exit();
        xhttp.send();

    }
)();
//geting values from Rank for just Rank 5
var selectedS5 = "";
(

    function currentStaffMixXSelectLevelS5() {
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            //alert(this.status);
            //return;

            if (this.readyState == 4 && this.status == 200) {
                //alert('new');
                // exit();
                // cFunction(this); //cFunction(xhttp)
                // document.getElementById("loadFaacc").innerHTML = this.responseText;
                // var responsses = this.responseText;
                // if (!response == "") {
                // document.getElementById("me").innerHTML = this.responseText;
                selectedS5 = this.responseText;
                //alert(selectedS5);

                // document.getElementById("daptyu").innerHTML = this.responseText;
                // return responsses;
                // } else {
                // alert("Sorry, There Are No Department In that Faculty");
                // }
                // alert(XMLrespondsText);
            }
        }; //end of xhttp object 

        xhttp.open("GET", "PHP/currentStaffMixSelS5.php", true);
        // alert(str);
        //  exit();
        xhttp.send();
    }
)();
//selected Rank from 6 to 7
var selectedP67 = "";
(

    function currentStaffMixPselect67() {
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            //alert(this.status);
            //return;

            if (this.readyState == 4 && this.status == 200) {
                //alert('new');
                // exit();
                // cFunction(this); //cFunction(xhttp)
                // document.getElementById("loadFaacc").innerHTML = this.responseText;
                // var responsses = this.responseText;
                // if (!response == "") {
                // document.getElementById("me").innerHTML = this.responseText;
                selectedP67 = this.responseText;
                // alert(selectedP67);

                // document.getElementById("daptyu").innerHTML = this.responseText;
                // return responsses;
                // } else {
                // alert("Sorry, There Are No Department In that Faculty");
                // }
                // alert(XMLrespondsText);
            }
        }; //end of xhttp object 

        xhttp.open("GET", "PHP/currentStaffMixSeletdP67.php", true);
        // alert(str);
        //  exit();
        xhttp.send();
    }
)();
//let get all the L1234, S5, and P67
function getAllLSP() {
    var p67 = selectedP67;
    var L1234 = selectedL1234;
    var S5 = selectedS5;

    alert(L1234);
    alert(S5);
    alert(p67);
}
///////////////////////////////////////////////////Everything LeaveManger ends here
//All the Infor Needed for Membership of profession body start here
function membershipOfProBody() {
    var memofProBody = _("profBody").value;
    var reGDate = _("regDate").value;
    var statusPMF = _("statusMFP").value;
    var memShipNumber = _("memShipNo").value;
    var getFileImage = _("file").value;
    if (memofProBody != "") {
        if (reGDate != "") {
            if (statusPMF != 0) {
                if (memShipNumber != "") {
                    if (getFileImage != "") {
                        _("loader").style.display = "block";
                        var data = new FormData();
                        data.append("file1", document.querySelector("#file").files[0]); //get the image file from here
                        data.append("mOPB", memofProBody);
                        data.append("rDate", reGDate);
                        data.append("statP", statusPMF);
                        data.append("mNo", memShipNumber);
                        var xhttp;
                        xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {

                            if (this.readyState == 4 && this.status == 200) {
                                _("loader").style.display = "none";
                                var response = this.responseText;
                                if (response != "") {
                                    //   _('ggfg').innerHTML = response;
                                    alert(response);
                                } else {
                                    // alert("Sorry, There Are No Department In that Faculty");
                                }
                                //alert(this.XMLrespondsText);
                            }
                        }; //end of xhttp object 
                        xhttp.open("POST", "PHP/membersipOfProBody.php", true);
                        xhttp.send(data);
                    } else {
                        alert("Select Certificate To Upload")
                        return;
                    }
                } else {
                    alert("Supply Your Membership Number")
                    return;
                }
            } else {
                alert("Select Status")
                return;
            }
        } else {
            alert("Choose Registration Date")
            return;
        }
    } else {
        alert("Please Key in Professional Body")
        return;
    }

}
//layoutmarketing. Targeted marketing system begins from here
function myfun() {
    _("modal4").style.display = "block";
}

function myfunAd() {
    //alert("u");
    _("modaAD").style.display = "block";

}

function myfunMa() {
    _("modalMA").style.display = "block";
}
//performance Manager function is here
function myFunction() {
    _("modal").style.display = "block";
}

function myfunct() {

    _("nameHOD").style.boxShadow = "1px 1px 1px 2px lightblue";

}

function myfunctp() {

    _("pasw").style.boxShadow = "1px 1px 1px 2px lightblue";
}
//get username from db
function getUsername() {
    var user = _("UsenM").value;
    if (user != "") {
        _("modalLoaderSpin").style.display = "block";
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            //alert(this.status);
            // return;
            if (this.readyState == 4 && this.status == 200) {
                // document.getElementById("loadFaacc").innerHTML = this.responseText;
                _("modalLoaderSpin").style.display = "none";
                var responsses = this.responseText;
                if (responsses == "Successful") {
                    createInput();
                } else {
                    alert(this.responseText);
                }
            }
        }; //end of xhttp object 

        xhttp.open("GET", "newLogin.php?user=" + user, true);
        xhttp.send();
    } else {
        alert("Please Provide Username");
    }

}

function createInput() {
    _("cretinput").style.display = "none";
    _("bottomUp").style.display = "block";

}

function getPassword() {
    // alert("am working");
    var user = _("pasWod").value;
    if (user != "") {
        _("modalLoaderSpin").style.display = "block";
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            //alert(this.status);
            // return;
            if (this.readyState == 4 && this.status == 200) {
                _("modalLoaderSpin").style.display = "none";
                var responsses = this.responseText;
                if (responsses == "Successful") {
                    jump();
                } else {
                    alert(this.responseText);
                }
            }
        }; //end of xhttp object 

        xhttp.open("GET", "newLogin.php?user=" + user, true);
        xhttp.send();
    } else {
        alert("Please Provide Password");
    }


}

function jump() {
    // alert("fg");
    window.location = "layoutMarketing1.php";
}

function myfunctA() {

    _("userNa").style.boxShadow = "1px 1px 1px 2px lightblue";

}

function myfunctpA() {

    _("pawrd").style.boxShadow = "1px 1px 1px 2px lightblue";
}

function adminLoginMarket() {

    var usera = _("userNa").value;
    var pasa = _("pawrd").value;
    if (usera != "") {
        if (pasa != "") {
            _("modalLoaderSpin").style.display = "block";
            var dtStrg = 'US=' + usera + '&PW=' + pasa;

            var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // document.getElementById("loadFaacc").innerHTML = this.responseText;
                    _("modalLoaderSpin").style.display = "none";
                    var response = this.responseText;
                    if (response == "Sucessful") {
                        window.location = "adminMarket.php";
                        // alert(response);
                    } else {
                        // alert("Sorry, There Are No Department In that Faculty");
                        alert(this.responseText);
                    }
                    //alert(this.XMLrespondsText);
                }
            }; //end of xhttp object 

            xhttp.open("POST", "PHP/adminLoginMarket.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(dtStrg);
        } else {
            alert("Password needed");
        }
    } else {
        alert("Provide Username");
    }
}

function myBlur() {
    var u = _("name").innerHTML;
    alert(u);

}

function myAge() {
    var agA = _("ageN").innerHTML;
    alert(agA);
}

function categoryMarket() {
    //alert("Helo");
    //return;
    var cat = _("cateG").value;
    if (cat != "") {
        _("modalLoaderSpin").style.display = "block";
        var dtAStrg = 'CAT=' + cat;

        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // document.getElementById("loadFaacc").innerHTML = this.responseText;
                _("modalLoaderSpin").style.display = "none";
                var response = this.responseText;
                if (response == "Category Added Successfully") {
                    // window.location = "adminMarket.php";
                    alert(response);
                    clear();
                } else {
                    // alert("Sorry, There Are No Department In that Faculty");
                    alert(this.responseText);
                }
                //alert(this.XMLrespondsText);
            }
        }; //end of xhttp object 

        xhttp.open("POST", "PHP/categoryMarket.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(dtAStrg);
    } else {
        alert("Provide Category");
    }
}

function clear() {
    var input = _("cateG");
    input.value = "";
}
//this set the table cell to contenteditable
    function burtry() {
    //var table = _("myTable1");
      //  for(var i, row;row=table.rows[i]; i++){
        //    for(var j, col;col=row.cells[i]; i++){
          //      _("tb5").contenteditable = "true";   
            //}
       // }
   // _("tb5").contentEditable = "true";
     var table = document.getElementById("myTable1").rows;
      var y;
        for(i = 0; i <table.rows[i]; i++)
        {    for(j = 0; j <row.cells[i]; j++)
     {
         y = table[i].cells;
         //do something with cells in a row
        // y[j].innerHTML = "";
         _("tb5").contenteditable = "true";
     }
}
}
function myFun(e){ 
    alert(e.target.innerText); //current cell
    alert(e.target.parentNode.innerText); //Current row.
}
function myFunction10(){
    var table = document.getElementById("myTable1");
for (var i = 0, row; row = table.rows[i]; i++) {
   //iterate through rows
   //rows would be accessed using the "row" variable assigned in the for loop
  // for (var j = 0, col; col = row.cells[j]; j++) {
    alert(row.innerHTML);
    //alert(c.innerHTML);
    //_("tb5").contenteditable = "true";
     //iterate through columns
     //columns would be accessed using the "col" variable assigned in the for loop
  // }  
}
}
function myFunctio() {
    var table = document.getElementById("myTable1");
   // var table=document.getElementById("mytab1");
    var r=0;
    while(row=table.rows[r++])
    {
      var c=0;
      while(cell=row.cells[c++])
      {
        //cell.innerHTML='[Row='+r+',Col='+c+']'; // do sth with cell
        //alert(c.innerHTML);
       // alert(cell.innerHTML);
      }
    }
   
   
    
   // document.getElementById("demo").innerHTML = "Found " + x + " tr elements in the table.";
   // alert(x);
}