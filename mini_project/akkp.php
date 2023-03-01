<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--bootstrap icons stylesheet-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
    <title>donate</title>
  </head>
  <section class="pt-5 pb-5 a1" id="about">
        <div class="container">
            <div class="row align-items-center justify-content-between" data-aos="fade-up" data-aos-duration="1500">
                <div class="col-md-6 px-5 py-3">
                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw8PEA8PDw8ODQ8PDQ0PDQ8NDw8NDQ0OFREWFhURFRUYHSggGBolGxUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OFw8QFSsdHR8tKy0tLSstLSstKy0tLS0rKystKy03KystLS0tKystLS0tLS0rLSstKy0tLS0rLSstK//AABEIALcBEwMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAACAwABBAUGB//EADgQAAIBAwIEAggFAwQDAAAAAAABAgMREgQhBTFBUWFxBhMiMoGRobFCUsHw8RQj0XKC4eJiktL/xAAZAQEBAQEBAQAAAAAAAAAAAAAAAQMCBAX/xAAeEQEBAAMAAwEBAQAAAAAAAAAAAQIDERIhMQRBYf/aAAwDAQACEQMRAD8A+fJBJFpBJHbBSQSREgkgiJBpFJBpFREgkiJBpAUkXYJIJIIFIuwaRdgAUQkgki7BAqISQSiEogAohqISiGogAojIxDUBkYBC1EYoBqAxQAUohqIxQCUQFYl4jcSYgKxJiNxKxAVYpobYpooS0C0OaBaIpTRVhjRVgF2LCsQg8ukEkUkEkHaJBJFIJFRaDQKDREEkEkUkGkBaQSREg0iopIGpUjBXk7IVrNXGku8n7qOJXrSm7ybl9o/AlrvHDrpVeKpe6lL4mefEqj5NR/0xX3Zj9S12f1NOm8ovwtZ+Rxcm01wDqVXznP8A9mRU5c7yb6XbOzp9Jlb2EvHw8To0+Dxkt7rZLb7/AFM7sbTRa83Rr14Wak5LtK8os7eg4hCpZNYS5We6b8GbIejisrTkt79NgJ+jE4u8bTXNxviWbY5y/Nb/ABpjAYoA0PZ9ieUJLlmnHL9PqalA1mUryZ67heUpQDUBqgEoF65KxLxHYF4joTiViPxKxKhOJWI7EHEBLiC0PcQWgENA2HNANFCmgbDWgGiAbECIRXlUWiItB0tFoiLQRaDSBQyIBJBpFRGRQRaRc5KMXJ8krhJHM45qMVGn3eUl4Lkvn9gsnbxydRVc5OTd2+fby8iQhyu2lfok/wBRUX++46/w2XjZHL0xppUVvzdlb3srfIfRukrbeSafbmLoS5J7c/Pvf7bDI1E2rWT2a7X52+xxWkdnh9ZRaTfTc7+ms+XgePotvdX3e3hvsek4dLFR59Fv0Mc49GGTuUomqFMTpXf9To0KZlxr5M9XSKatKKkvt5HM1Glwduj5M9M4bGLW0Motdea8zvXn41lv1zZj/scNQCURiiFiet8ovEmI3EmJQnEpxHYlNAJcQXEc0C4lQloBoe0A0VCGgGhzQDRUKaAaGtANAKIFYsK8oi0Cgjl2stAhIINDIi4jYgMSGRQER0UVBJHktZXdSpKb6vbwXRHsEjxtem4SlF/hk19TmtNYEx1KW9/3cSh9Gztfl1/X6EbQ53dv9NvPkhtCl36LYXGf3+HQ3aTne19tv1OK7xjVpElZP8O7+C2O3o6u3728ji07ttWs+vmdfhkE3vvvt06Izyb4u9op+Njr0KpyaMLch7qtK/0MWvHcVVWu2l5i/wCopy2Tj87M8xW1sZSec0rP3bppLu0c3VV/6hqOndWTTvli1C3hsdeKS3r1Wu02LUlyb38GZVERGVZKnQd3JNTrzl+FW2gu75GpI312+L5++SZ+g4lWGWKaNGJdgWhrQLRULaBaGNAtBC2hbQ1gNHSFSQtodIXJBCWgGhrAaKFWIEUFeRRYKZZy7EEgEGghkRsBUR0QhsUOiKgPgAcUeY4/RxrSf51Gf6P7HqYo5PpLpnKEai/A2peT5fX7krvC+3nBif2FjtI1nG/K6uc16MZ28dLScH1NVJwptrpeUU382jeuG6ijG1SnKKS580kdqXCadaNR+tqUnGEJ05RlLCCaTvZGXhvFJ1YRoSm5SdR0oyn+JWbUrPyMPO17bomPpzFXTkktrb+fU63CZ+1G3xv4GDXcPlTqWmsZRe/Z780M09fBq3wYt7GcnK9rpGn2OpQ0kJJp73PK6HXqyO5o9dy3Mq2HU4FTTyVOm3y3W5p0GhVNOy5u9ui8jdR1Cl2GVIpJtdherJGLWaWM3ktp2SfaXmc6UGnZqzDp6+mk6tSeEVvvvfwsU+JU9THKEWt9m4uF15M11ZX4836tM55fKWSxZDd88LBYTKZQDAYbBZXIGAw2AywLkLkNkKkVC2BIYxbKgCFkIPFphIBBIjQSDQCDiENiOgJiNiA+A+AiA+AQ6JdWkpxlB8pJplRGRIrw2poOE5QfOLa/5Fxdj0/pBw7OPrYL24r2rfij3+B5hkrfG9e89EeLQnFU5u0lFQ35SinePxW6A1nBKstTKVGdKnhLKEZ5JX77I8VTqOLTTafdHqOA+ldWm1GrH10ejtecTz5YWe4+jhvmU5l9dHj9WUnFVMXUUFm4O8cl2Zy6EbtXGekXH6eomsKbhhtlJWc++xm0Na7W/USWRxbOu9paKsl1R0dGnF28jLopr97nTptGdaR0tLWOnSq3Vjg05G+FW0b/AMkOjfDKSyUY3UnvdtqPgvAxzp4PG1rbbci6lTUyuoqFJfmlLKT+XIUoyVlKzklvbl8DbV9ef9c7jMqK5GVcps3fPWwWRsFsIjAbLbAbKimCy2wGyoGQuQchcmUCxbDYDKgSFEA8UgkAgkctRoOICDiENiOgxEWNiwh8GPgzNFjoMI0xY2LM8WNiwHo8lx7ReqqXivZn7S8H1R6pM53H6CnRb6wvJeXUld4XleVRv4XPGab5dTnxNunXJmeT14fW/jmmVlVirfmOfo9Vi12PR0KaqU2vDdHnNXo3Tk9vZvscY3vppnLL2PT8O4hFpb9jtUtSnuv8nz6hUtydjqaTiU42vv8A5JcHU2PbU617dTbRqbHktHxuCtlseg4dxKnPr4czOytJlK1aj1jTxvHx5MlNWSTblbm5O7b7mqeqg4tJ8zHka6Z9eT9WV9Qy5TYGRWRs8Y2wWwMinIqCbAbKbBcii2wWymwGyotsW2STAbCI2A2W2A2URkBuQDxaCQCCRy2MQSAQSYQ2LGRYlMOLCNEWNizNFjYsI0xkOjIyxkMjII1KR57ifGJOU6cber3hLa8pdGdTW6jCnOXVR283sjyCYd4RtpaPP3Jwk/yyfq5fXb6minp503jUhKPbJNX8V3MFKdnc9DwbiKuoObgnzhK06Uv9r2Obh342mzxvtu4O+/wfc1cT0CnG9jq6TR0pL3MX3pbRfji3b5WNlThUmvYantyfsS+T2+p58sMpXrx24ZTnXzbU6NxfIQ5OPQ9dxTh0o+9GUX2ksfijg6iir8jqZOcsP7GrhXCJV4eslJQi747ZN25vnsdCn6Pzi/Zr2/2f9jocMhhSpwezUFfwfM1qRt4x4rty76pei0jp7yqSqy7y2S8ka8hSkTIsnGdytvadkVkKyKyCGORTkLyBcioY5A5AOQLkUG5AtgOQLkAbkA2C5A3KgmwWwWymwLuQXcgV5BBIBBI5aiQSYCCQQxMNMUmGmENTGRYhMNMDRGQyMjPFhqRUVxGuoUpXSd1ik+TbPLxZ0OKar1klFe7Hr3fVmJRI0xnINR/lcgouwGNuX8hwd/1R1CvWei3HcZKlVk7SaUJN7X/Kz6DRp5L3pr42PikWe+9CuP8ArLaavJ5pf2pWcpVYr8D8UuvVeW6z+uZ6esrQSVp1Y4/lnjJfFM8/xDR6W6nGMXNP2XC6hfvjyO/WUbXUYx8XFOR5GrxGNapUxbtTm6dn4c35Xucci3KyemhTDUjKphqZeMmjMvMRkTMcD8ishOZWYDsinIS5FOZQ3IFyFuRWQQxyByFuRTkAbkU5AORWRQbYLYDkU5BRXILuQDyyLQKCOGoiwSyg0wkxaCTCGJhJi7lplDkzDxDWWvCL3/E108Ca3U4Ky96XLwXc5ZFxxFcKLACDs2L2KlHqtmDFjGdfY4+VUXfzHUasoSjKLcZRkpRktnFrdNCWuq5/cLJeXgx04+kejXpN/VRdKsoqvFPdJJVY/mS6NdV+15vj9Kej1kppf26zzXZ395eae/xRwtJqZUpxq03acJqUX2fj4f5Pe6x0+J6KU4W9bFZKPOVOtFXcfJra/iRHOpVlJKSd01dDVM8zwjXYPCT9mXL/AMWd9SDizjRmXmIUi8gh2RWQrImQDMiZCsiZAMyKyF5FZAMyKyF3KuUG5EuLuS4BuQLYNwWwDyILuURXnEwkAmWmctTLl3AuXcqDTLTF3LuAxMu4u4utO0ZPw28wMGoq5Sb+XkDGbAIidacPVvAjQMWWvkdOVoZEC4UREokSSuiFlRVNbHT4HxWelqqcbuLsqsPzw/yuhy722fLoEmSLY3cX0yp1W4PKlV/uUZLk4N8vNPY3cK1mSwk/ajy8Uc+hWU4epm7LLKlJ8qdT/wCX1+fczwlKnPrGUXZp801zQTnZx6nItSM1CspxUl1+j7DUwzNyJkLuS4QeRLgXKuUHkTIC5VwDuVcG5VyA7lXAuS5VE2C2C2U2QFcgvIgV59MJMshy0XclyEKLuXchAiXM2tn7KXd/YhBVn1iIQhy0EmNW5CFiVaCIQqDTLIQ6cpzBtbyIQlWLT7fwOnJz3e7jGzfeK5fFIhBCtPC9RjLF8pcvBnYuQgcZfV3JchCuEuS5CAS5LlEAlyXIQCrlXIQCmwWyEIqrkIQK/9k="
                        class="img-fluid" alt="...">
                </div>
                <div class="col-md-6 p-5">
                    <h2>Uday Kumar Reddy</h2>
                    <p class="lead">
                        Udhay is based out of Andhra Pradesh & has studied ECE ENTC-Electronics and Tele-Communication Engineering, B.Tech-Bachelor of Technology from Year 2021-2025 in VU-Vignan University, Vignan University
                        <br><h6>Udhay Kumar Reddy is Skilled in Aptitude.</h6>
                       <a href="#"> <i class="fa-solid fa-2x fa-envelope px-2" style="color:red"></i></a>
                      <a href="#"> <i class="fa-brands fa-2x fa-linkedin my-4"></i></a>
                      <a href="#"><i class="fa-brands fa-instagram fa-2x mx-2 " style="color:crimson"></i></a>
                    <p>
                        <a class="btn btn-primary" href="resultpage.php">Donate Now!</a>


                    </p>
                </div>
            </div>
            <hr>
            
            <div class="row align-items-center justify-content-between"  data-aos="fade-up" data-aos-duration="1500">
                
                <div class="col-md-6 p-5">
                    <h2>Madeneni Neelima</h2>
                    <p class="lead">Maddineni is based out of Guntur & has studied CS-Computer Science, BE BTech-Bachelor of Engineering or Technology from Year 2016-2020 in VU-Vignan University, Vignan University.
                       <br> <h6>Maddineni Neelima is Skilled in Aptitude, Core Java, Ropedancer and other talents.</h6><br>
                       <a href=""> <i class="fa-solid fa-2x fa-envelope px-2" style="color:red;"></i></a>
                       <a href="#"> <i class="fa-brands fa-2x fa-linkedin my-4"></i></a>
                       <a href=""><i class="fa-brands fa-instagram fa-2x mx-2" style="color:crimson;"></i></a>
                    <p>
                        <a class="btn btn-primary" href="resultpage.php">Donate Now!</a>

                    </p>
                </div>
                <div class="col-md-6 px-5 py-3">
                    <img src="https://img.freepik.com/free-photo/pleasant-looking-serious-man-stands-profile-has-confident-expression-wears-casual-white-t-shirt_273609-16959.jpg?w=2000"
                        class="img-fluid" alt="...">
                </div>
                
            </div>
            <hr>
            <div class="row align-items-center justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-md-6 px-5 py-3">
                    <img src="data:image/jpeg;base64,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"
                        class="img-fluid" alt="...">
                </div>
                <div class="col-md-6 p-5">
                    <h2>Harash Gautam</h2>
                    <p class="lead"> Harsh is based out of Guntur & has studied CSE-Computer Science and Engineering, B.Tech-Bachelor of Technology from Year 2016-2020 in VU-Vignan University, Vignan University.
                        <br><h6>Harsh Gautam is Skilled in C Plus Plus, C Language, Software Engineering and other talents.</h6>
                    <p>
                        <a href=""> <i class="fa-solid fa-2x fa-envelope px-2" style="color:red;"></i></a>
                        <a href="#"> <i class="fa-brands fa-2x fa-linkedin my-4"></i></a>
                        <a href=""><i class="fa-brands fa-instagram fa-2x mx-2" style="color:crimson;"></i></a>
                        <p>
                        <a class="btn btn-primary" href="resultpage.php">Donate Now!</a>

                    </p>
                </div>
            </div>
            <hr>
            <div class="row align-items-center justify-content-between"data-aos="fade-up" data-aos-duration="1500" >
                
                <div class="col-md-6 p-5">
                    <h2>Jaya Sai Chand Mahesh</h2>
                    <p class="lead"> Jaya is based out of Mumbai & has studied ECE ENTC-Electronics and Tele-Communication Engineering, BE BTech-Bachelor of Engineering or Technology from Year 2016-2020 in VU-Vignan University, Vignan University.
                       <br><h6> Jaya Sai Chand Mahesh is Skilled in C Language, Reasoning, Computer Knowledge and other talents.</h6>
                       <a href=""> <i  class="fa-solid fa-2x fa-envelope px-2" style="color:red;"></i></a>
                       <a href="#"> <i class="fa-brands fa-2x fa-linkedin my-4"></i></a>
                       <a href=""><i class="fa-2x fa-brands fa-instagram mx-2" style="color:crimson;"></i></a>
                    <p>
                       
                        <a class="btn btn-primary" href="resultpage.php">Donate Now!</a>

                    </p>
                </div>
                <div class="col-md-6 px-5 py-3">
                    <img src="https://img.freepik.com/free-photo/pleasant-looking-serious-man-stands-profile-has-confident-expression-wears-casual-white-t-shirt_273609-16959.jpg?w=2000"
                        class="img-fluid" alt="...">
                </div>
            </div>
        </div>
        <hr>
    </section>
</body>
</html>