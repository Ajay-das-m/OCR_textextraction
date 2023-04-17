<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1" />

	<!-- Bootstrap CSS -->
	<link
	href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity=
"sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
	crossorigin="anonymous"
	/>
	<link rel="stylesheet"
		href="style.css" />
	<link rel="preconnect"
		href="https://fonts.gstatic.com" />
	<link
	href=
"https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap"
	rel="stylesheet"
	/>
	<title>profile View</title>
</head>
<body>
    <section class="vh-100" style="background-color: #b3c5e8;">
        <div class="container py-5 h-100" >
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-6 mb-4 mb-lg-0">
              <div class="card mb-3" style="border-radius: .5rem;">
                <div class="row g-0">

                  <div class="col-md-8">       
                    <div class="card-body p-4">         
                      <h3>John & Smith Solutions </h3>
                      <hr class="mt-0 mb-4">
                      <div class="row pt-1">                      
                        <div class="col-6 mb-3" style="width: 2500px">
                            <h6>Content:</h6>
                            <p class="text-muted">{{$users->content}}</p>
                          </div>
                        <div class="col-6 mb-3" style="width: 2500px">
                          <h6>Phone No:</h6>
                          <p class="text-muted"123>{{$users->phone}}</p>
                        </div>
                        <div class="col-6 mb-3" style="width: 2500px">
                          <h5>email</h5>
                          <p class="text-muted"123>{{$users->email}}</p>
                        </div>
                      
                      </div>
                      
                      <hr class="mt-0 mb-4">
                      <div class="row pt-1">
                        <div class="col-6 mb-3">
                          <h6>Declaration</h6>
                          <p class="text-muted">{{$users->declaration}}</p>
                        </div>
                        <div class="col-6 mb-3">
                          <h6>Time Sheet No</h6>
                          <p class="text-muted" style="font-size: 50px;font">{{$users->timesheet_no}}</p>
                        </div>
                      </div>
                      <div class="d-flex justify-content-start">
              
                        <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                        <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>
