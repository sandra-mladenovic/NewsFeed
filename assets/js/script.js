$(document).ready(function () {
    localStorage.removeItem("catValue")

    $("#register-form").hide();

    $("#register-link").click(function () {
        $("#login-form").hide();
        $("#register-form").show();
    });

    $("#login-link").click(function () {
        $("#register-form").hide();
        $("#login-form").show();
    });

    // function refreshPostView(){
    //     $.ajax({
    //         url: 'models/news/get-all.php', 
    //         method: 'post', 
    //         dataType: 'json', 
    //         success: function(data){
    //             printPost(data);
    //         }, 
    //         error: function(err, status, statusText){
    //             console.log(err);
    //             console.log(status);
    //         }
    //     });
    // }

   
    
    if(document.getElementById("searchPosts")){
        document.getElementById("searchPosts").addEventListener("keyup", filterPosts)
    }

    if(document.getElementById("searchMyPosts")){
        document.getElementById("searchMyPosts").addEventListener("keyup", filterMyPosts)
    }

    if(document.getElementById("ddlSort")){
        document.getElementById("ddlSort").addEventListener("change", filterPosts)
    }

    if(document.getElementById("ddlMyPostsSort")){
        document.getElementById("ddlMyPostsSort").addEventListener("change", filterMyPosts)
    }

    $('.catFilter').click(filterPosts)

    function filterPosts(){

        if(this.text == undefined){
            localStorage.getItem("catValue")
        }else{
            localStorage.setItem("catValue", this.text.trim())
        }
        
        let catValue = localStorage.getItem("catValue")
        let searchValue = document.getElementById("searchPosts").value
        let sortValue = document.getElementById("ddlSort").value
        let data = {}

        if (localStorage.getItem("catValue") == null){
            data = {
                searchValue : searchValue,
                sortValue : sortValue,
            }
        }else{
            data = {
                searchValue : searchValue,
                sortValue : sortValue,
                catValue : catValue
            }
        }
        $.ajax({
            url : "models/news/filter.php",
            method : "GET",
            data : data,
            success : function(data){
                console.log(JSON.parse(JSON.stringify(data)))
                printPost(JSON.parse(JSON.stringify(data)))
            },
            error : function(xhr, status, msg){
                console.error(xhr)
                console.error(status)
                console.error(msg)
            }
        })

    }

    function filterMyPosts(){

        if(this.text == undefined){
            localStorage.getItem("catValue")
        }else{
            localStorage.setItem("catValue", this.text.trim())
        }
        
        let catValue = localStorage.getItem("myCatValue")
        let searchValue = document.getElementById("searchMyPosts").value
        let sortValue = document.getElementById("ddlMyPostsSort").value
        let data = {}

        if (localStorage.getItem("catValue") == null){
            data = {
                searchValue : searchValue,
                sortValue : sortValue,
            }
        }else{
            data = {
                searchValue : searchValue,
                sortValue : sortValue,
                catValue : catValue
            }
        }
        $.ajax({
            url : "models/posts/filterMyPosts.php",
            method : "GET",
            data : data,
            success : function(data){
                console.log(JSON.parse(JSON.stringify(data)))
                printUserPosts(JSON.parse(JSON.stringify(data)))
            },
            error : function(xhr, status, msg){
                console.error(xhr)
                console.error(status)
                console.error(msg)
            }
        })

    }

    if(document.getElementById("showInsertPostForm")){

        $("#showInsertPostForm").click(function(e){
            e.preventDefault();
            $("#insertPostForm").slideToggle();
        })
        
    }
});

function osveziPrikazC(){
        $.ajax({
        url: 'models/news/osvezeno.php',
        method: 'GET',
        dataType: 'json',
        success: function(podaci, status, data){
        if(data.status == 201){
        console.log('cenovnikOsvezeno: ' + podaci);
        }
        prikazIzmenjenihPostova(podaci);
        },
        error: function(error){
        console.error('Greska osvezavanja izmena:'+error);
        }
    });

function prikazIzmenjenihPostova(posts){
    console.log(posts);
    let html = "";
    function ispisDatum(datum){
        d = new Date(datum);
        var dat = d.getDate();
        var mes = d.getMonth() + 1;
        var god = d.getFullYear();
        var dateStr = dat + "." + mes + "." + god+".";
        return dateStr;
        }
    for(let p of posts){
        html+= `
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
        <!-- News block -->
        <div>
          <!-- Featured image -->
          <div class="bg-image hover-overlay shadow-1-strong ripple mb-4" data-mdb-ripple-color="light">
            <img src="https://mdbootstrap.com/img/new/fluid/city/113.jpg" class="img-fluid" />
            <a href="">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>

          <!-- Article data -->
          <div class="row mb-3">
            <div class="col-6">
              <a href="" class="${p.Category}">
                <i class="${p.icon}"></i>
                ${p.Category}
              </a>
            </div>

            <div class="col-5 text-end">
              <u>${ispisDatum(p.created_at)}</u>
            </div>
            <div class="col-1">
              <a><i class="far fa-bookmark"></i></a>
            </div>
          </div>

          <!-- Article title and description -->
          <a href="" class="text-dark">
            <h5>${p.title}</h5>

            <p>
              ${p.description}
            </p>
          </a>

          <hr />

        </div>
        <!-- News block -->
      </div>
        
        `;
        $("#news").html(html);
    }
}






}
if(document.querySelector("#insertPostBtn")){

    let button1 = document.querySelector("#insertPostBtn");
    button1.addEventListener("click", insertForm);
}
function insertForm(e){
        // e.preventDefault();
            let title = document.querySelector("#title").value;
            let content = document.querySelector("#content").value;
            let description = document.querySelector("#description").value;
            let photo = document.querySelector("#photo").value;
            let userId = document.querySelector("#id_user").value;
            // $.ajax({
            //     url: "models/posts/insertPost.php",
            //     method: "POST",
            //     dataType: "json",
            //     data: {
            //         title : title,
            //         content : content,
            //         description : description,
            //         photo : photo,
            //         userId : userId
            //     },
            //     success: function (data) {
            //         console.log(data);
            //         document.querySelector("#title").value = '';
            //         document.querySelector("#content").value = '';
            //         document.querySelector("#description").value = '';
            //         document.querySelector("#photo").value = '';
        
            //         // let alertDiv = document.querySelector('#successMessage');
            //         // let message = document.querySelector('#msg');
            //         // alertDiv.classList.remove('invisible');
            //         // alertDiv.classList.add('alert-success');
            //         // message.textContent = data;
            //         // setTimeout(function () {
            //         //     alertDiv.classList.add('invisible')
            //         // }, 2500);
            //     },
            //     error: function (err, status, statusText) {
            //         // let alertDiv = document.querySelector('#successMessage');
            //         // let message = document.querySelector('#msg');
            //         switch (err.status) {
            //             case 409:
            //                 alertDiv.classList.remove('invisible');
            //                 alertDiv.classList.add('alert-warning');
            //                 message.textContent = 'Email nije dostupan!';
            //                 break;
            //             case 422:
            //                 alertDiv.classList.remove('invisible');
            //                 alertDiv.classList.add('alert-warning');
            //                 message.textContent = 'Greške!';
            //                 break;
            //         }
            //     }
            // })
        //}
// window.onload = function () {
//     if(document.querySelector("#registerBtn")){
//         let button = document.querySelector("#registerBtn");
//         button.addEventListener("click", register);
//     }

    $(document).on('click', '.deleteIcon', function(e) {
        e.preventDefault()
            $.ajax({
                url : "models/posts/deletePost.php",
                method : "GET",
                data : {
                    postId : $(this).data("id"),
                    userId : $(this).data("user")
                },
                success : function (data) {
                    printUserPosts(data);
                },
                error : function(xhr, status, msg) {
                    console.error(xhr)
                    console.error(status)
                    console.error(msg)
                }
            })
    })

    $(document).on('click', '.deleteIconComment', function(e) {
        e.preventDefault()
            $.ajax({
                url : "models/comments/deleteCommentAjax.php",
                method : "GET",
                data : {
                    id : $(this).data("id")
                },
                success : function (data) {
                    printUserPostComments(JSON.parse(data));
                },
                error : function(xhr, status, msg) {
                    console.error(xhr)
                    console.error(status)
                    console.error(msg)
                }
            })
    })
}
function formatDatum(date){
    var datum=new Date(date);
    var dan=datum.getDate();
    var month=datum.getMonth() + 1;
    var year=datum.getFullYear();
    var datumFormat=dan+"."+month+"."+year+".";
    return datumFormat;
}
function printPost(data){
    let html = ""; 
   
    for(let post of data){
        html+= `<div class="col-lg-4 col-md-12 mb-4 mb-lg-0" id="news">
        <!-- News block -->
        <div>
          <!-- Featured image -->
          <div class="bg-image hover-overlay shadow-1-strong ripple mb-4" data-mdb-ripple-color="light">
            <img src="assets/img/${post.photo}" class="img-fluid" />
            <a href="">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>

          <!-- Article data -->
          <div class="row mb-3">
            <div class="col-6">
              <a href="" class="${post.Category}">
                <i class="<?= ${post.icon}"></i>
                ${post.Category}
              </a>
            </div>

            <div class="col-6 text-end">
              <u>${formatDatum(post.created_at)}</u>
            </div>
          </div>

          <!-- Article title and description -->
          <a href="" class="text-dark">
            <h5>${post.title}</h5>

            <p>
             ${post.description}
            </p>
          </a>

          <hr />

        </div>
        <!-- News block -->
      </div>`;
    }

    document.getElementById("allNews").innerHTML = html
}

function printUserPosts(data) {
    let html = ""; 
    for(let post of data){
        html+= `<div class="col-lg-4 col-md-12 mb-4 mb-lg-0" id="news">
        <!-- News block -->
        <div class="posts">
        <a class="deleteIcon" data-user="${post.id_user}" data-id="${post.id_post}" href="models/posts/deletePost.php">Delete</a>
          <!-- Featured image -->
          <div class="bg-image hover-overlay shadow-1-strong ripple mb-4" data-mdb-ripple-color="light">
            <img src="assets/img/${post.photo}" class="img-fluid" />
            <a href="">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>

          <!-- Article data -->
          <div class="row mb-3">
            <div class="col-6">
              <a href="" class="${post.Category}">
                <i class="<?= ${post.icon}"></i>
                ${post.Category}
              </a>
            </div>

            <div class="col-6 text-end">
              <u>${post.created_at}</u>
            </div>
          </div>

          <!-- Article title and description -->
          <a href="" class="text-dark">
            <h5>${post.title}</h5>

            <p>
             ${post.description}
            </p>
          </a>

          <hr />

        </div>
        <!-- News block -->
      </div>`;
    }
    document.getElementById("allNews").innerHTML = html
}

function printUserPostComments(data) {
    let html = ""; 

    for (const d of data) {
        html += `<div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-8">
                <div class="d-flex flex-column comment-section" id="myGroup">
                    <div>
                    <a class="deleteIconComment" data-id="${d.id_comment}" href="models/comments/deledeleteCommentAjax.php">Delete</a>
                    </div>
                    <div class="bg-white p-2">
                        <div class="d-flex flex-row user-info"><img class="rounded-circle" src="https://i.imgur.com/RpzrMR2.jpg" width="50">
                            <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">${d.full_name}</span><span class="date text-black-50">Shared publicly - ${d.date}</span></div>
                        </div>
                        <div class="mt-2">
                            <p class="comment-text">${d.comment}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>`;
    }

    document.getElementById("allComments").innerHTML = html
}