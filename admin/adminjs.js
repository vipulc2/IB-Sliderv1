
jQuery(function() {
  
    jQuery("#btnImage").on("click", function() {
      var images = wp.media({
          title: "Upload Image for Slider",
          multiple: true
      }).open().on("select", function(e) {
          var uploadedImages = images.state().get("selection");
          var selectedImages = uploadedImages.toJSON();

          
          
          
          selectedImages.forEach((eachimage,index) => {
            
            
            
            jQuery(`.pictures${index}`).attr("src", eachimage.url);

            // let ulimage = document.querySelector("ul");

          });





          // let screen = document.querySelector("#image_attachment_id");


          // console.log(selectedImages.title + "  " + selectedImages.url + "   " + selectedImages.filename);

          /*selectedImages.map(function(image){
           var itemDetails = image.toJSON();
           console.log(itemDetails.url);
           });*/

        });
    });


    let btnSubmit= document.querySelector("#btnSubmit");

    btnSubmit.addEventListener("click", ()=>{

      let list = document.getElementsByClassName("unique");
      
      let lis = Array.from(list);

      lis.forEach((eachlis,i)=>{

        
        let imgList = eachlis.firstElementChild.getAttribute("src");

        document.querySelector(`#img${i}`).value = imgList;
        
        console.log(imgList);

      });

    });

    let remove1 = document.querySelector("#th1");
    let remove2 = document.querySelector("#th2");
    let remove3 = document.querySelector("#th3");
    let remove4 = document.querySelector("#th4");
    let remove5 = document.querySelector("#th5");
        
    remove1.addEventListener("click", (e)=>{


      let remove = e.target.parentElement.parentElement.previousElementSibling.children[0].firstElementChild.setAttribute("src", "");
      console.log(remove);

    });
    remove2.addEventListener("click", (e)=>{

      let remove = e.target.parentElement.parentElement.previousElementSibling.children[1].firstElementChild.setAttribute("src", "");
      console.log(remove);

    });
    remove3.addEventListener("click", (e)=>{


      let remove = e.target.parentElement.parentElement.previousElementSibling.children[2].firstElementChild.setAttribute("src", "");
      console.log(remove);

    });
    remove4.addEventListener("click", (e)=>{


      let remove = e.target.parentElement.parentElement.previousElementSibling.children[3].firstElementChild.setAttribute("src", "");
      console.log(remove);

    });
    remove5.addEventListener("click", (e)=>{
      // let ulUnique = document.querySelector(".ul-unique");

      let remove = e.target.parentElement.parentElement.previousElementSibling.children[4].firstElementChild.setAttribute("src", "");
      console.log(remove);

    });


      
      










});  