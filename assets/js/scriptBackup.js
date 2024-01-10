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

      // console.log(e);

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
let customInputs = document.querySelectorAll(
  ".profile-edit-form .custom-input"
);
let customInputLabels = document.querySelectorAll(
  ".profile-edit-form .form-input-label"
);

if (customInputs.length) {
  customInputs.forEach((customInput, idx) => {
    if (customInput.value.length) {
      customInputLabels[idx].classList.add("shrink");
    }
  });
}

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
    // console.log("hello");
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

// have-business-details
const switchIsbusinessInput = document.querySelector(
  ".have-business-details #switch-isbusiness-input"
);

const haveBusinessDetails = document.querySelector(
  ".have-business-details .switch-button"
);

const switchArea = document.querySelector(
  ".have-business-details .switch-area"
);

const businessDetailsAllSection = document.querySelector(
  ".business-details-all-section"
);

let toggleHaveBusinessDetails =
  switchIsbusinessInput.value === "Yes" ? false : true;

console.log(switchIsbusinessInput.value);

haveBusinessDetails.addEventListener("click", () => {
  toggleHaveBusinessDetails = !toggleHaveBusinessDetails;

  if (toggleHaveBusinessDetails) {
    switchArea.classList.add("active");
    businessDetailsAllSection.classList.add("active");
    switchIsbusinessInput.value = "Yes";
  } else {
    switchArea.classList.remove("active");
    businessDetailsAllSection.classList.remove("active");
    switchIsbusinessInput.value = "No";
  }
});

haveBusinessDetails.click();

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
  });

  uploadImageInputs[idx].addEventListener("change", function () {
    uploadImageButton.classList.add("active");
    const selectedFile = uploadImageInputs[idx].files[0];
    console.log("ola");

    if (selectedFile) {
      const reader = new FileReader();

      reader.onload = function (e) {
        uploadImages[idx].src = e.target.result;
      };

      reader.readAsDataURL(selectedFile);
    } else {
      uploadImages[idx].src = "";
    }
  });
});

// const addRepeaterButton = document.querySelector("#addFeature");
// const repeaterListArea = document.querySelector("#featuresListing");

// const addHoursButton = document.querySelector("#addHours");
// const hoursListing = document.querySelector("#hoursListing");

// const addGalleryButton = document.querySelector("#addGallery");
// const galleryListing = document.querySelector("#galleryListing");

const businessHourDays = document.querySelectorAll("#businessHourDay");

// // addFeature
// addRepeaterButton.addEventListener("click", function () {
//   const uploadImageButtons = document.querySelectorAll(
//     ".repeaterListArea1 .uploadImageArea"
//   );
//   const uploadImageInputs = document.querySelectorAll(
//     ".repeaterListArea1 .uploadImageArea .custom-input"
//   );

//   const uploadImages = document.querySelectorAll(
//     ".repeaterListArea1 .uploadImageArea img"
//   );

//   uploadImageButtons.forEach((uploadImageButton, idx) => {
//     uploadImageButton.addEventListener("click", () => {
//       uploadImageInputs[idx].click();
//     });

//     uploadImageInputs[idx].addEventListener("change", function () {
//       uploadImageButton.classList.add("active");
//       const selectedFile = uploadImageInputs[idx].files[0];
//       // console.log("ola");

//       if (selectedFile) {
//         const reader = new FileReader();

//         reader.onload = function (e) {
//           uploadImages[idx].src = e.target.result;
//         };

//         reader.readAsDataURL(selectedFile);
//       } else {
//         uploadImages[idx].src = "";
//       }
//     });
//   });

//   const repeaterDiv = document.createElement("div");
//   repeaterDiv.innerHTML = `
//     <div class="repeaterList">
//       <div class="group">
//         <div class="inner-input">
//           <input
//             onchange="getData(this)"
//             type="text"
//             class="custom-input auto"
//             name="forFeatureTitle"
//             id="forFeatureTitle"
//             placeholder="eg: Free wifi, Pickup and Drop, Swimming pool etc..."
//           />
//           <label class="form-input-label shrink" for="forFeatureTitle">
//             Feature Title
//           </label>
//         </div>
//         <p class="input-error">
//           something went wrong
//         </p>
//       </div>
//       <div class="group uploadImageArea">
//         <div class="inner-input">
//           <input
//             onchange="getData(this)"
//             type="file"
//             class="custom-input"
//             name="forFeatureImage"
//             id="forFeatureImage"
//             hidden
//           />
//           <img class="preview-image" src="" alt="" />
//           <label class="form-input-label" for="forFeatureImage">
//             <i class="fas fa-cloud-arrow-up"></i>
//             <br />
//             Click to upload
//             <br />
//             Feature Image
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
//     repeaterListArea.removeChild(repeaterDiv);

//     // console.log(repeaterListArea);
//   });

//   repeaterListArea.appendChild(repeaterDiv);
// });

// addRepeaterButton.click();

// setTimeout(() => {
//   addRepeaterButton.click();
// }, 1000);

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
// addGalleryButton.addEventListener("click", function () {
//   const uploadImageButtons = document.querySelectorAll(
//     ".repeaterListArea2 .uploadImageArea"
//   );
//   const uploadImageInputs = document.querySelectorAll(
//     ".repeaterListArea2 .uploadImageArea .custom-input"
//   );

//   const uploadImages = document.querySelectorAll(
//     ".repeaterListArea2 .uploadImageArea img"
//   );

//   uploadImageButtons.forEach((uploadImageButton, idx) => {
//     uploadImageButton.addEventListener("click", () => {
//       uploadImageInputs[idx].click();
//     });

//     uploadImageInputs[idx].addEventListener("change", function () {
//       uploadImageButton.classList.add("active");
//       const selectedFile = uploadImageInputs[idx].files[0];
//       // console.log("ola");

//       if (selectedFile) {
//         const reader = new FileReader();

//         reader.onload = function (e) {
//           uploadImages[idx].src = e.target.result;
//         };

//         reader.readAsDataURL(selectedFile);
//       } else {
//         uploadImages[idx].src = "";
//       }
//     });
//   });

//   const repeaterDiv = document.createElement("div");
//   repeaterDiv.innerHTML = `
//     <div class="repeaterList">
//       <div class="group">
//         <div class="inner-input">
//           <input
//             onchange="getData(this)"
//             type="text"
//             class="custom-input auto"
//             name="forGalleryTitle"
//             id="forGalleryTitle"
//             placeholder="eg: Food, Room, Car, Hotel etc..."
//           />
//           <label class="form-input-label shrink" for="forGalleryTitle">
//             Gallery Title
//           </label>
//         </div>
//         <p class="input-error">
//           something went wrong
//         </p>
//       </div>
//       <div class="group uploadImageArea">
//         <div class="inner-input">
//           <input
//             onchange="getData(this)"
//             type="file"
//             class="custom-input"
//             name="forGalleryImage"
//             id="forGalleryImage"
//             hidden
//           />
//           <img class="preview-image" src="" alt="" />
//           <label class="form-input-label" for="forGalleryImage">
//             <i class="fas fa-cloud-arrow-up"></i>
//             <br />
//             Click to upload
//             <br />
//             Gallery Image
//           </label>
//         </div>
//         <p class="input-error">
//           something went wrong
//         </p>
//       </div>
//       <div class="removeButton">Remove</div>
//     </div>
//   `;

//   const removeButton = allRepeateDiv.querySelector(".removeButton");
//   removeButton.addEventListener("click", function () {
//     galleryListing.removeChild(repeaterDiv);
//   });

//   galleryListing.appendChild(repeaterDiv);
// });

// addGalleryButton.click();

// setTimeout(() => {
//   addGalleryButton.click();
// }, 1000);

const switchButton = document.querySelectorAll(
  "#businessHourDay .switch-button"
);
const displayOpenClose = document.querySelectorAll(
  "#businessHourDay .switch-area span"
);
const inputAreaSec = document.querySelectorAll(
  "#businessHourDay .input-area-sec"
);

if (businessHourDays.length) {
  businessHourDays.forEach((businessHourDay, idx) => {
    let toggle = displayOpenClose[idx].innerText === "Closed" ? false : true;

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
}

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

const profileNavButtons = document.querySelectorAll(
  ".profile-edit-nav-list .profile-edit-nav-button"
);
const dataFilters = document.querySelectorAll(".dataFilter");

profileNavButtons.forEach((profileNavButton, index) => {
  profileNavButton.addEventListener("click", () => {
    window.scroll(0, 0);
    dataFilters.forEach((filter) => filter.classList.remove("active"));
    profileNavButtons.forEach((button) => button.classList.remove("active"));
    if (
      dataFilters[index].getAttribute("data-filter") ===
      profileNavButton.getAttribute("data-name")
    ) {
      dataFilters[index].classList.add("active");
      profileNavButton.classList.add("active");
    }
  });
});

//newwwwwwwwww

//new code for feature repeater
let featureIndex = 1;

function cloneFeature() {
  const uploadImageButtons = document.querySelectorAll(
    ".repeaterListArea1 .uploadImageArea"
  );
  const uploadImageInputs = document.querySelectorAll(
    ".repeaterListArea1 .uploadImageArea .custom-input"
  );

  const uploadImages = document.querySelectorAll(
    ".repeaterListArea1 .uploadImageArea img"
  );

  uploadImageButtons.forEach((uploadImageButton, idx) => {
    uploadImageButton.addEventListener("click", () => {
      uploadImageInputs[idx].click();
    });

    uploadImageInputs[idx].addEventListener("change", function () {
      uploadImageButton.classList.add("active");
      const selectedFile = uploadImageInputs[idx].files[0];
      console.log("ola1");

      if (selectedFile) {
        const reader = new FileReader();

        reader.onload = function (e) {
          uploadImages[idx].src = e.target.result;
        };

        reader.readAsDataURL(selectedFile);
      } else {
        uploadImages[idx].src = "";
      }
    });
  });

  const featuresListing = document.getElementById("featuresListing");
  const newItem = featuresListing
    .querySelector(".repeaterList")
    .cloneNode(true);

  featureIndex++;
  newItem
    .querySelector("#forFeatureTitle")
    .setAttribute("id", `forFeatureTitle${featureIndex}`);
  newItem
    .querySelector('.form-input-label[for="forFeatureTitle"]')
    .setAttribute("for", `forFeatureTitle${featureIndex}`);

  newItem.querySelector(".custom-input").value = "";

  newItem.querySelector(".removeButton").addEventListener("click", function () {
    removeFeature(this);
  });

  featuresListing.appendChild(newItem);
}

cloneFeature();

setTimeout(() => {
  cloneFeature();
}, 500);

function removeFeature(element) {
  const item = element.closest(".repeaterList");

  if (item.parentNode) {
    const featuresListing = item.parentNode;
    if (featuresListing.childElementCount > 1) {
      featuresListing.removeChild(item);
    } else {
      console.log("At least one item must be present");
    }
  }
}

let galleryIndex = 1;

function cloneGallery() {
  const uploadImageButtons = document.querySelectorAll(
    ".repeaterListArea2 .uploadImageArea"
  );
  const uploadImageInputs = document.querySelectorAll(
    ".repeaterListArea2 .uploadImageArea .custom-input"
  );

  const uploadImages = document.querySelectorAll(
    ".repeaterListArea2 .uploadImageArea img"
  );

  uploadImageButtons.forEach((uploadImageButton, idx) => {
    uploadImageButton.addEventListener("click", () => {
      uploadImageInputs[idx].click();
    });

    uploadImageInputs[idx].addEventListener("change", function () {
      uploadImageButton.classList.add("active");
      const selectedFile = uploadImageInputs[idx].files[0];
      console.log("ola1");

      if (selectedFile) {
        const reader = new FileReader();

        reader.onload = function (e) {
          uploadImages[idx].src = e.target.result;
        };

        reader.readAsDataURL(selectedFile);
      } else {
        uploadImages[idx].src = "";
      }
    });
  });

  const featuresListing = document.getElementById("galleryListing");
  const newItem = featuresListing
    .querySelector(".repeaterList")
    .cloneNode(true);

  galleryIndex++;
  newItem
    .querySelector("#forFeatureTitle")
    .setAttribute("id", `forFeatureTitle${galleryIndex}`);
  newItem
    .querySelector('.form-input-label[for="forFeatureTitle"]')
    .setAttribute("for", `forFeatureTitle${galleryIndex}`);

  newItem.querySelector(".custom-input").value = "";

  newItem.querySelector(".removeButton").addEventListener("click", function () {
    removeGallery(this);
  });

  featuresListing.appendChild(newItem);
}

cloneGallery();

setTimeout(() => {
  cloneGallery();
}, 500);

function removeGallery(element) {
  const item = element.closest(".repeaterList");

  if (item.parentNode) {
    const featuresListing = item.parentNode;
    if (featuresListing.childElementCount > 1) {
      featuresListing.removeChild(item);
    } else {
      console.log("At least one item must be present");
    }
  }
}

//
//
//
//
//
//
//
//
//
//

import { useContext, useEffect, useRef } from "react";
import { AllDataContext } from "../../context/AllData.context";

const NavigateButtonsComponent = ({ data }) => {
  const buttonListRef = useRef();
  const { detailsPageNav, setDetailsPageNav } = useContext(AllDataContext);

  useEffect(() => {
    if (buttonListRef.current) {
      console.log(buttonListRef.current);
    }
  }, [buttonListRef]);

  return (
    <div className="NavigateButtons">
      <div className="wrapper">
        <div className="button-list" ref={buttonListRef}>
          {data.content !== null &&
          data.content !== undefined &&
          data.content !== "" ? (
            <button
              className={`navigateBtn ${
                detailsPageNav === "Overview" ? "active" : ""
              }`}
              onClick={() => {
                window.scroll(0, 470);
                setDetailsPageNav("Overview");
              }}
            >
              Overview
            </button>
          ) : null}
          {(data.itenarydetails !== null &&
            data.itenarydetails !== undefined) ||
          data.itenarydetails.lenght ? (
            data.itenarydetails[0]?.trip_title !== null ? (
              <button
                className={`navigateBtn ${
                  detailsPageNav === "Itinerary" ? "active" : ""
                }`}
                onClick={() => {
                  window.scroll(0, 470);
                  setDetailsPageNav("Itinerary");
                }}
              >
                Itinerary
              </button>
            ) : null
          ) : null}
          {(data.exclude !== null || data.include !== null) &&
          (data.exclude !== undefined || data.include !== undefined) &&
          (data.exclude !== "" || data.include !== "") ? (
            <button
              className={`navigateBtn ${
                detailsPageNav === "Includes & Excludes" ? "active" : ""
              }`}
              onClick={() => {
                window.scroll(0, 470);
                setDetailsPageNav("Includes & Excludes");
              }}
            >
              Includes & Excludes
            </button>
          ) : null}

          {(data.price !== null && data.price !== undefined) ||
          data.price.lenght ? (
            data.price[0]?.date !== null ||
            data.price[0]?.label !== null ||
            data.price[0]?.space !== null ||
            data.price[0]?.value !== null ? (
              <button
                className={`navigateBtn ${
                  detailsPageNav === "Departure Date & Price" ? "active" : ""
                }`}
                onClick={() => {
                  window.scroll(0, 470);
                  setDetailsPageNav("Departure Date & Price");
                }}
              >
                Departure Date & Price
              </button>
            ) : null
          ) : null}
          {data.equipments !== null &&
          data.equipments !== undefined &&
          data.equipments !== "" ? (
            <button
              className={`navigateBtn ${
                detailsPageNav === "Trip Notes" ? "active" : ""
              }`}
              onClick={() => {
                window.scroll(0, 470);
                setDetailsPageNav("Trip Notes");
              }}
            >
              Trip Notes
            </button>
          ) : null}
          {data.galleryimage !== null &&
          data.galleryimage !== undefined &&
          data.galleryimage.lenght ? (
            <button
              className={`navigateBtn ${
                detailsPageNav === "Tour Gallery" ? "active" : ""
              }`}
              onClick={() => {
                window.scroll(0, 470);
                setDetailsPageNav("Tour Gallery");
              }}
            >
              Tour Gallery
            </button>
          ) : null}
        </div>

        {(data.price !== null && data.price !== undefined) ||
        data.price.lenght ? (
          data.price[0]?.date !== null ||
          data.price[0]?.label !== null ||
          data.price[0]?.space !== null ||
          data.price[0]?.value !== null ? (
            <div className="last-button">
              <button
                className={`bookNowNutton`}
                onClick={() => {
                  window.scroll(0, 470);
                  setDetailsPageNav("DatePrices");
                }}
              >
                ENQUIRE NOW
              </button>
            </div>
          ) : null
        ) : null}
      </div>
    </div>
  );
};

export default NavigateButtonsComponent;


//
//

///
///
//

import { Fragment, useContext, useEffect, useState } from "react";
import PackageBannerComponent from "./PackageBanner.component";
import NavigateButtonsComponent from "./NavigateButtons.component";
import TripOverviewComponent from "./TripOverview.component";
import ItineraryComponent from "./Itinerary.component";
import DateAndPriceComponent from "./DateAndPrice.component";
import TripExtensionsComponent from "./TripExtensions.component";
import MoreInfoComponent from "./MoreInfo.component";
import GalleryComponent from "./Gallery.component";
import { AllDataContext } from "../../context/AllData.context";
import { useLocation } from "react-router-dom";
import LoadingComponent from "../Loading.component";
import PackageBookingComponent from "../PackageDetail/PackageBooking.component";
import YouMightAlsoLikeComponent from "./YouMightAlsoLike.component";

const NewPackageDetailsComponent = () => {
  const { tripDatas, setDetailsPageNav } = useContext(AllDataContext);
  const [choosenPrice, setChoosenPrice] = useState(null);

  const [selectedData, setSelectedData] = useState(null);

  const location = useLocation();

  useEffect(() => {
    setDetailsPageNav("TripOverview");
    if (tripDatas !== null) {
      tripDatas?.forEach((data) => {
        if (location.pathname.split("/")[2] == data.slug) {
          setSelectedData(data);
        }
      });
    }
  }, [location, tripDatas]);

  return (
    <Fragment>
      {selectedData !== null ? (
        <div className="NewPackageDetails">
          <PackageBannerComponent image={selectedData?.image?.original_image}>
            {selectedData?.title.toLowerCase()}
          </PackageBannerComponent>

          <PackageBookingComponent
            selectedData={selectedData}
            choosenPrice={choosenPrice}
            setChoosenPrice={setChoosenPrice}
            popup={true}
          />

          <NavigateButtonsComponent data={selectedData} />

          {selectedData.content !== null &&
          selectedData.content !== undefined &&
          selectedData.content !== "" ? (
            <TripOverviewComponent data={selectedData} />
          ) : null}

          {(selectedData.itenarydetails !== null &&
            selectedData.itenarydetails !== undefined) ||
          selectedData.itenarydetails.lenght ? (
            selectedData.itenarydetails[0]?.trip_title !== null ? (
              <ItineraryComponent data={selectedData} />
            ) : null
          ) : null}

          {(selectedData.exclude !== null || selectedData.include !== null) &&
          (selectedData.exclude !== undefined ||
            selectedData.include !== undefined) &&
          (selectedData.exclude !== "" || selectedData.include !== "") ? (
            <MoreInfoComponent data={selectedData} />
          ) : null}

          {(selectedData.price !== null && selectedData.price !== undefined) ||
          selectedData.price.lenght ? (
            selectedData.price[0]?.date !== null ||
            selectedData.price[0]?.label !== null ||
            selectedData.price[0]?.space !== null ||
            selectedData.price[0]?.value !== null ? (
              <DateAndPriceComponent data={selectedData} />
            ) : null
          ) : null}

          {selectedData.equipments !== null &&
          selectedData.equipments !== undefined &&
          selectedData.equipments !== "" ? (
            <TripExtensionsComponent data={selectedData} />
          ) : null}

          {selectedData.galleryimage !== null &&
          selectedData.galleryimage !== undefined &&
          selectedData.galleryimage.lenght ? (
            <GalleryComponent data={selectedData} />
          ) : null}

          <YouMightAlsoLikeComponent data={selectedData} />
        </div>
      ) : (
        <LoadingComponent />
      )}
    </Fragment>
  );
};

export default NewPackageDetailsComponent;