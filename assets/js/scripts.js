const sideNavBtn = document.querySelector(".side-nav-btn");
const sideNavcloseBtn = document.querySelector(".side-nav-close-btn");
const sideNav = document.querySelector(".side-nav");
// const background = document.querySelector(".background");
const sticky = document.querySelector("header");
const categoriesSec = document.querySelector(".categories-sec");

window.onscroll = () => {
  if (this.scrollY > 100) {
    sticky.classList.add("sticky");
  } else {
    sticky.classList.remove("sticky");
  }
};

if (sideNav) {
  sideNavBtn.addEventListener("click", () => {
    sideNavBtn.classList.toggle("active");
    sideNav.classList.toggle("active");
    // background.classList.toggle("active");
  });

  sideNavcloseBtn.addEventListener("click", () => {
    sideNavBtn.classList.remove("active");
    sideNav.classList.remove("active");
    // background.classList.remove("active");
  });

  // background.addEventListener("click", () => {
  //   sideNavBtn.classList.remove("active");
  //   sideNav.classList.remove("active");
  //   background.classList.remove("active");
  // });
}

const customButtons = document.querySelectorAll(".custom-button");
const bobble = document.querySelectorAll(".bob");

if (customButtons[0] !== undefined || customButtons[0] !== null) {
  customButtons.forEach((customButton, idx) => {
    customButton.addEventListener("click", (e) => {
      let x = e.offsetX;
      let y = e.offsetY;

      console.log(e);

      bobble[idx].style.left = `${x}px`;
      bobble[idx].style.top = `${y}px`;

      bobble[idx].classList.add("active");

      setTimeout(() => {
        bobble[idx].classList.remove("active");
      }, 1000);
    });
  });
}

const faqBtns = document.querySelectorAll(".faq-btn");
const faqBtnImg = document.querySelectorAll(".faq-btn-img");
const faqBtnDesc = document.querySelectorAll(".faq-btn-desc");

if (faqBtns[0] !== undefined || faqBtns[0] !== null) {
  faqBtns.forEach((faqBtn, idx) => {
    faqBtn.addEventListener("click", () => {
      faqBtnImg[idx].classList.toggle("active");
      faqBtnDesc[idx].classList.toggle("active");
    });
  });
}

const moreImageBtn = document.querySelector("#more-images-btn");
const moreImagePopup = document.querySelector(".vendor-more-images");
const moreImageClose = document.querySelector(".close-more-images-btn");
const moreImageBg = document.querySelector(".more-images-bg");

if (moreImageBtn) {
  moreImageBtn.addEventListener("click", () => {
    moreImagePopup.classList.add("active");
  });

  moreImageClose.addEventListener("click", () => {
    moreImagePopup.classList.remove("active");
  });

  moreImageBg.addEventListener("click", () => {
    moreImagePopup.classList.remove("active");
  });
}

// wizard form
const inputGroups = document.querySelectorAll(".input-groups");

if (inputGroups[0] !== undefined) {
  const innerGroup = document.querySelector(".inner-group");
  const nextBtn = document.querySelectorAll("#next-btn");
  const prevBtn = document.querySelectorAll("#prev-btn");
  let dividedValue = [];
  let listOfValue = [];
  let lastValue = 0;

  inputGroups.forEach((inputGroup, idx) => {
    innerGroup.style.width = `${idx + 1}00%`;

    let length = idx + 1;
    let divide = 100 / length;

    listOfValue[idx] = divide;
  });

  lastValue = listOfValue.slice(-1).pop();

  dividedValue[0] = 0;

  for (let i = 0; i < inputGroups.length; i++) {
    dividedValue[i + 1] = dividedValue[i] + lastValue;

    let target = inputGroups[i].getAttribute("id");

    const removeAttribute = () => {
      inputGroups[i].setAttribute("id", "");

      setErrorEmail(null);
      setErrorContactNumber(null);
      setErrorPanNumber(null);
    };

    if (target === "errorOccered") {
      innerGroup.style.transform = `translateX(-${dividedValue[i]}%)`;

      setTimeout(removeAttribute, 3000);
    }
  }

  nextBtn.forEach((nBtn, idx) => {
    let newIdx = idx + 1;
    nBtn.addEventListener("click", (e) => {
      e.preventDefault();
      innerGroup.style.transform = `translateX(-${dividedValue[newIdx]}%)`;
    });
  });

  prevBtn.forEach((pBtn, idx) => {
    pBtn.addEventListener("click", (e) => {
      e.preventDefault();
      innerGroup.style.transform = `translateX(-${dividedValue[idx]}%)`;
    });
  });
}

// input shring code
let formInputLabels = document.querySelectorAll(".form-input-label");
const getData = (data) => {
  formInputLabels.forEach((formInputLabel, idx) => {
    let dataAttributeName = data.getAttribute("name");
    let labelAttributeName = formInputLabel.getAttribute("for");

    if (dataAttributeName === labelAttributeName) {
      if (data.getAttribute("name") === dataAttributeName) {
        if (data.value.length) {
          formInputLabel.classList.add("shrink");
        } else {
          formInputLabel.classList.remove("shrink");
        }
      }
    }
  });
};

// let valueDisplays = document.querySelectorAll(".num");
// let interval = 6000;

// valueDisplays.forEach((valueDisplay) => {
//   let startValue = 0;
//   let endValue = parseInt(valueDisplay.getAttribute("data-val"));
//   let duration = Math.floor(interval / endValue);
//   let counter = setInterval(function () {
//     startValue += 1;
//     valueDisplay.textContent = startValue;
//     if (startValue == endValue) {
//       clearInterval(counter);
//     }
//   }, duration);
// });

let contactButton = document.querySelector(".contact-button");
let contactPopup = document.querySelector(".contact-popup");

if (contactButton) {
  contactButton.addEventListener("click", () => {
    contactButton.classList.toggle("active");
    contactPopup.classList.toggle("active");
  });
}

const hiddenImageSec = document.querySelector(".hidden-image");
const bgForClose = document.querySelector(".bg-for-close");
const imageCloseBtn = document.querySelector("#imageCloseBtn");
const hiddenImage = document.querySelector(".hidden-image img");
const images = document.querySelectorAll(".clickToView");

if (hiddenImageSec) {
  images.forEach((image) => {
    image.addEventListener("click", () => {
      const imageUrl = image.getAttribute("src");

      hiddenImage.setAttribute("src", imageUrl);

      hiddenImageSec.classList.add("active");
    });
  });

  imageCloseBtn.addEventListener("click", () => {
    hiddenImageSec.classList.remove("active");
    console.log("hello");
  });

  bgForClose.addEventListener("click", () => {
    hiddenImageSec.classList.remove("active");
  });
}

// Hignlight Link
const navLink = document.querySelectorAll(".navLinkBtn");
const pathname = location.pathname;

let filterPathname = pathname;
filterPathname = filterPathname.replace(/.html/, "");
filterPathname = filterPathname.replace("/", "");

// filterPathname = filterPathname.replace("{% url '", "");
// filterPathname = filterPathname.replace("' %}", "");

navLink.forEach((link, idx) => {
  let url = link.getAttribute("href");
  // filterUrl = url.replace("{% url '", "");
  // filterUrl = url.replace("' %}", "");
  filterUrl = url.replace(".html", "");
  // filterUrl = url.replace("/", "");

  if (filterPathname === filterUrl) {
    if (`${filterUrl}.html` === url) {
      link.classList.add("active");
    }
  }
});

const haveBusinessDetails = document.querySelector(
  ".have-business-details .switch-button"
);

const switchArea = document.querySelector(
  ".have-business-details .switch-area"
);

const businessDetailsAllSection = document.querySelector(
  ".business-details-all-section"
);
haveBusinessDetails.addEventListener("click", () => {
  switchArea.classList.toggle("active");
  businessDetailsAllSection.classList.toggle("active");
});

haveBusinessDetails.click();

const runAgain = () => {
  const uploadImageButtons = document.querySelectorAll(
    ".repeaterListArea .uploadImageArea"
  );
  const uploadImageInputs = document.querySelectorAll(
    ".repeaterListArea .uploadImageArea .custom-input"
  );

  const uploadImages = document.querySelectorAll(
    ".repeaterListArea .uploadImageArea img"
  );

  uploadImageButtons.forEach((uploadImageButton, idx) => {
    uploadImageButton.addEventListener("click", () => {
      uploadImageInputs[idx].click();
      console.log("helo");
    });

    uploadImageInputs[idx].addEventListener("change", function () {
      uploadImageButton.classList.add("active");
      const selectedFile = uploadImageInputs[idx].files[0];

      console.log(selectedFile);

      if (selectedFile) {
        const reader = new FileReader();

        reader.onload = function (e) {
          uploadImages[idx].src = e.target.result;
        };

        reader.readAsDataURL(selectedFile);
      } else {
        // Clear the image preview if no file is selected
        uploadImages[idx].src = "";
      }
    });
  });
};

runAgain();

const addRepeaterButton = document.querySelector("#addFeature");
const repeaterListArea = document.querySelector("#featuresListing");

const addHoursButton = document.querySelector("#addHours");
const hoursListing = document.querySelector("#hoursListing");

const addGalleryButton = document.querySelector("#addGallery");
const galleryListing = document.querySelector("#galleryListing");

const businessHourDays = document.querySelectorAll("#businessHourDay");

// addFeature
addRepeaterButton.addEventListener("click", function () {
  runAgain();

  const repeaterDiv = document.createElement("div");
  repeaterDiv.innerHTML = `
    <div class="repeaterList">
      <div class="group">
        <div class="inner-input">
          <input
            onchange="getData(this)"
            type="text"
            class="custom-input auto"
            name="forFeatureTitle"
            id="forFeatureTitle"
            placeholder="eg: Free wifi, Pickup and Drop, Swimming pool etc..."
          />
          <label class="form-input-label shrink" for="forFeatureTitle">
            Feature Title
          </label>
        </div>
        <p class="input-error">
          something went wrong
        </p>
      </div>
      <div class="group uploadImageArea">
        <div class="inner-input">
          <input
            onchange="getData(this)"
            type="file"
            class="custom-input"
            name="forFeatureImage"
            id="forFeatureImage"
            hidden
          />
          <img class="preview-image" src="" alt="" />
          <label class="form-input-label" for="forFeatureImage">
            <i class="fas fa-cloud-arrow-up"></i>
            <br />
            Click to upload
            <br />
            Feature Image
          </label>
        </div>
        <p class="input-error">
          something went wrong
        </p>
      </div>
      <div class="removeButton">Remove</div>
    </div>
  `;

  const removeButton = repeaterDiv.querySelector(".removeButton");
  removeButton.addEventListener("click", function () {
    repeaterListArea.removeChild(repeaterDiv);

    console.log(repeaterListArea);
  });

  repeaterListArea.appendChild(repeaterDiv);
});

addRepeaterButton.click();

setTimeout(() => {
  addRepeaterButton.click();
}, 1000);

// addHours
// addHoursButton.addEventListener("click", function () {
//   runAgain();
//   const repeaterDiv = document.createElement("div");
//   repeaterDiv.innerHTML = `
//     <div class="repeaterList">
//       <div class="group">
//         <div class="inner-input">
//           <input
//             onchange="getData(this)"
//             type="text"
//             class="custom-input auto"
//             name="forDay"
//             id="forDay"
//             placeholder="eg: Sun, Mon, Tue etc..."
//           />

//           <label
//             class="form-input-label shrink"
//             for="forDay"
//           >
//             Day
//           </label>
//         </div>
//         <p class="input-error">
//           something went wrong
//         </p>
//       </div>

//       <div class="group">
//         <div class="inner-input ">
//           <input
//             onchange="getData(this)"
//             type="text"
//             class="custom-input auto"
//             name="forTime"
//             id="forTime"
//             placeholder="eg: 10:00AM - 08:00PM etc..."
//           />

//           <label
//             class="form-input-label shrink"
//             for="forTime"
//           >
//             Time
//           </label>
//         </div>
//         <p class="input-error">
//           something went wrong
//         </p>
//       </div>

//       <div class="removeButton">Remove</div>
//     </div>
//   `;

//   const removeButton = repeaterDiv.querySelector(".removeButton");
//   removeButton.addEventListener("click", function () {
//     hoursListing.removeChild(repeaterDiv);
//   });

//   hoursListing.appendChild(repeaterDiv);
// });

// addHoursButton.click();

// setTimeout(() => {
//   addHoursButton.click();
// }, 1000);

// addGallery
addGalleryButton.addEventListener("click", function () {
  runAgain();
  const repeaterDiv = document.createElement("div");
  repeaterDiv.innerHTML = `
    <div class="repeaterList">
      <div class="group">
        <div class="inner-input">
          <input
            onchange="getData(this)"
            type="text"
            class="custom-input auto"
            name="forGalleryTitle"
            id="forGalleryTitle"
            placeholder="eg: Food, Room, Car, Hotel etc..."
          />
          <label class="form-input-label shrink" for="forGalleryTitle">
            Gallery Title
          </label>
        </div>
        <p class="input-error">
          something went wrong
        </p>
      </div>
      <div class="group uploadImageArea">
        <div class="inner-input">
          <input
            onchange="getData(this)"
            type="file"
            class="custom-input"
            name="forGalleryImage"
            id="forGalleryImage"
            hidden
          />
          <img class="preview-image" src="" alt="" />
          <label class="form-input-label" for="forGalleryImage">
            <i class="fas fa-cloud-arrow-up"></i>
            <br />
            Click to upload
            <br />
            Gallery Image
          </label>
        </div>
        <p class="input-error">
          something went wrong
        </p>
      </div>
      <div class="removeButton">Remove</div>
    </div>
  `;

  const removeButton = repeaterDiv.querySelector(".removeButton");
  removeButton.addEventListener("click", function () {
    galleryListing.removeChild(repeaterDiv);
  });

  galleryListing.appendChild(repeaterDiv);
});

addGalleryButton.click();

setTimeout(() => {
  addGalleryButton.click();
}, 1000);

const switchButton = document.querySelectorAll(
  "#businessHourDay .switch-button"
);
const displayOpenClose = document.querySelectorAll(
  "#businessHourDay .switch-area span"
);
const inputAreaSec = document.querySelectorAll(
  "#businessHourDay .input-area-sec"
);

businessHourDays.forEach((businessHourDay, idx) => {
  let toggle = false;

  switchButton[idx].addEventListener("click", () => {
    toggle = !toggle;

    if (toggle) {
      businessHourDay.classList.add("active");
      switchButton[idx].classList.add("active");
      displayOpenClose[idx].innerHTML = "Open";
      inputAreaSec[idx].style.display = "flex";
    } else {
      businessHourDay.classList.remove("active");
      switchButton[idx].classList.remove("active");
      displayOpenClose[idx].innerHTML = "Closed";
      inputAreaSec[idx].style.display = "none";
    }
  });

  if (toggle) {
    businessHourDay.classList.add("active");
    switchButton[idx].classList.add("active");
    displayOpenClose[idx].innerHTML = "Open";
    inputAreaSec[idx].style.display = "flex";
  } else {
    businessHourDay.classList.remove("active");
    switchButton[idx].classList.remove("active");
    displayOpenClose[idx].innerHTML = "Closed";
    inputAreaSec[idx].style.display = "none";
  }
});

// upload logo
const uploadPersoalImageButton = document.querySelector("#UploadPhoto");
const uploadPersoalImageInput = document.querySelector(
  "#UploadPhoto .custom-input"
);

const uploadPersoalImage = document.querySelector("#UploadPhoto img");

uploadPersoalImageButton.addEventListener("click", () => {
  uploadPersoalImageInput.click();
});

uploadPersoalImageInput.addEventListener("change", function () {
  uploadPersoalImageButton.classList.add("active");
  const selectedFile = uploadPersoalImageInput.files[0];

  if (selectedFile) {
    const reader = new FileReader();

    reader.onload = function (e) {
      uploadPersoalImage.src = e.target.result;
    };

    reader.readAsDataURL(selectedFile);
  } else {
    // Clear the image preview if no file is selected
    uploadPersoalImage.src = "";
  }
});

// upload logo
const uploadBusinessLogoButton = document.querySelector("#UploadBusinessLogo");
const uploadBusinessLogoInput = document.querySelector(
  "#UploadBusinessLogo .custom-input"
);

const uploadBusinessLogo = document.querySelector("#UploadBusinessLogo img");

uploadBusinessLogoButton.addEventListener("click", () => {
  uploadBusinessLogoInput.click();
});

uploadBusinessLogoInput.addEventListener("change", function () {
  uploadBusinessLogoButton.classList.add("active");
  const selectedFile = uploadBusinessLogoInput.files[0];

  if (selectedFile) {
    const reader = new FileReader();

    reader.onload = function (e) {
      uploadBusinessLogo.src = e.target.result;
    };

    reader.readAsDataURL(selectedFile);
  } else {
    // Clear the image preview if no file is selected
    uploadBusinessLogo.src = "";
  }
});

const eyeIconButtons = document.querySelectorAll("#eye-icon");
const passwordInputs = document.querySelectorAll(".typePassword");

eyeIconButtons.forEach((eyeIconButton, idx) => {
  toggle = false;
  eyeIconButton.addEventListener("click", () => {
    toggle = !toggle;

    if (toggle) {
      eyeIconButton.classList.add("active");
      passwordInputs[idx].setAttribute("type", "text");
    } else {
      eyeIconButton.classList.remove("active");
      passwordInputs[idx].setAttribute("type", "password");
    }
  });
});
