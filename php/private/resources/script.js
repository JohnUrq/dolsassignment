// --------------------------------------------------------
// Function to display/hide elements governed by checkbox (IMCA needed and Urgent Auth required)
// --------------------------------------------------------

function toggleElement(checkbox, id) {
  console.log("Function toggleElement has been called");
  var extra_fields_to_show = document.getElementById(id);
  if (checkbox.checked) {
    extra_fields_to_show.style.display = "block";
    extra_fields_to_show
      .querySelectorAll('input[type="checkbox"]')
      .forEach(function (input) {
        input.setAttribute("required", "");
      });
  } else {
    extra_fields_to_show.style.display = "none";
    extra_fields_to_show
      .querySelectorAll('input[type="checkbox"]')
      .forEach(function (input) {
        input.removeAttribute("required");
      });
  }
}

// When the user clicks on the button, scroll to the top of the document
// as we have already added event listeners to the buttons. we can also utilise this function
function topFunction() {
  console.log("topFunction called");
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// ---------------------------------------------------------
// Function to display/hide elements using navbar/buttons
// --------------------------------------------------------

// Create constants to handle the buttons and detailsElement.

// -----------------------
// 1 - Pt details
const ptDetailsButton = document.getElementById("pt_details_btn");
const ptDetails = document.getElementById("pt_details");

// -----------------------
// 2 - Care home details
const careHomeDetailsButton = document.getElementById("care_home_details_btn");
const careHomeDetails = document.getElementById("care_home_details");

// -----------------------
// 3 - Authorisations
const authDetailsButton = document.getElementById("auth_details_btn");
const authDetails = document.getElementById("auth_details");

// -----------------------
// 4 - Interested Persons
const interestedPersonDetailsButton = document.getElementById(
  "interested_persons_details_btn"
);
const interestedPersonDetails = document.getElementById(
  "interested_persons_details"
);

// -----------------------
// 5 - Advance decision
const advanceDecisionDetailsButton = document.getElementById(
  "advance_decision_details_btn"
);
const advanceDecisionDetails = document.getElementById(
  "advance_decision_details"
);

// -----------------------
// 6 - Signature
const signatureDetailsButton = document.getElementById("signature_details_btn");
const signatureDetails = document.getElementById("signature_details");

// -----------------------
// 7 - Data collection
const dataCollectionDetailsButton = document.getElementById(
  "data_collection_details_btn"
);
const dataCollectionDetails = document.getElementById(
  "data_collection_details"
);

// -----------------------
// 8 - Urgent Authorisation
const urgentAuthDetailsButton = document.getElementById(
  "urgent_auth_details_btn"
);

const urgentAuthDetails = document.getElementById("urgent_auth_details");

// -----------------------
// 9 - Extend urgent auth
const extendUrgentAuthDetailsButton = document.getElementById(
  "extend_urgent_auth_details_btn"
);
const extendUrgentAuthDetails = document.getElementById(
  "extend_urgent_auth_details"
);

// Hide all details of elements.
function hideAllDetails() {
  ptDetails.classList.add("hidden");
  careHomeDetails.classList.add("hidden");
  authDetails.classList.add("hidden");
  interestedPersonDetails.classList.add("hidden");
  advanceDecisionDetails.classList.add("hidden");
  signatureDetails.classList.add("hidden");
  dataCollectionDetails.classList.add("hidden");
  urgentAuthDetails.classList.add("hidden");
  extendUrgentAuthDetails.classList.add("hidden");
}

// Function to display elements
function showDetails(detailsElement) {
  hideAllDetails();
  detailsElement.classList.remove("hidden");
}
// Check that the DOM has finished loading before adding event listeners
document.addEventListener("DOMContentLoaded", function () {
  // use if statement to check if ptDetailsButton is null
  if (ptDetailsButton) {
    ptDetailsButton.addEventListener("click", function () {
      showDetails(ptDetails);
    });
  }

  if (careHomeDetailsButton) {
    careHomeDetailsButton.addEventListener("click", function () {
      showDetails(careHomeDetails);
      topFunction();
    });
  }

  if (authDetailsButton) {
    authDetailsButton.addEventListener("click", function () {
      showDetails(authDetails);
    });
  }

  if (interestedPersonDetailsButton) {
    interestedPersonDetailsButton.addEventListener("click", function () {
      showDetails(interestedPersonDetails);
    });
  }
  advanceDecisionDetailsButton.addEventListener("click", function () {
    showDetails(advanceDecisionDetails);
  });
  signatureDetailsButton.addEventListener("click", function () {
    showDetails(signatureDetails);
  });
  dataCollectionDetailsButton.addEventListener("click", function () {
    showDetails(dataCollectionDetails);
  });
  urgentAuthDetailsButton.addEventListener("click", function () {
    showDetails(urgentAuthDetails);
  });
  extendUrgentAuthDetailsButton.addEventListener("click", function () {
    showDetails(extendUrgentAuthDetails);
  });
  // Could we create an array of all the elements? Then use them as a drop-down menu to navigate between the pages?
  var showPtDetails = ptDetailsButton.addEventListener("click", function () {
    showDetails(ptDetails);
  });
  var showCareHomeDetails = careHomeDetailsButton.addEventListener(
    "click",
    function () {
      showDetails(careHomeDetails);
      errorCheck();
      topFunction();
    }
  );
  var showAuthDetails = authDetailsButton.addEventListener(
    "click",
    function () {
      showDetails(authDetails);
      topFunction();
    }
  );
  var showInterestedPersonDetails =
    interestedPersonDetailsButton.addEventListener("click", function () {
      showDetails(interestedPersonDetails);
    });
  var showAdvanceDecisionDetails =
    advanceDecisionDetailsButton.addEventListener("click", function () {
      showDetails(advanceDecisionDetails);
    });
  var showSignatureDetails = signatureDetailsButton.addEventListener(
    "click",
    function () {
      showDetails(signatureDetails);
    }
  );
  var showDataCollectionDetails = dataCollectionDetailsButton.addEventListener(
    "click",
    function () {
      showDetails(dataCollectionDetails);
    }
  );
  var showUrgentAuthDetails = urgentAuthDetailsButton.addEventListener(
    "click",
    function () {
      showDetails(urgentAuthDetails);
    }
  );
  var showExtendUrgentAuthDetails =
    extendUrgentAuthDetailsButton.addEventListener("click", function () {
      showDetails(extendUrgentAuthDetails);
    });
});

// Get a reference to the next_page_btn button
const next_page_btn = document.querySelector('.next_page_btn');

// Add an event listener for the button click
next_page_btn.addEventListener('click', errorCheck);


function errorCheck(e) {
  console.log("checking errors");
  var errorArray = [];
  // Clear existing error messages
  var errorsDiv = document.getElementById("errors");
  errorsDiv.innerHTML = "";
  errorsDiv.classList.add("hidden");
  // reset errorArray to 0
  errorArray = [];
  document.querySelectorAll(".section").forEach(function (section) {
    console.log("Checking section", section);
    section.querySelectorAll(":scope > div.field").forEach(function (div) {
      console.log("Checking field", div);
      var field = div.querySelector("[required]");
      if (field) {
        var filledIn = false;
        console.log("div has required field - field value: ", field.value);
        if (field.getAttribute("type") == "checkbox") {
          filledIn = field.checked;
        } else if (field.name == "less_restrictive_options") {
          // check if the field is the "Have less restrictive options been considered" question
          filledIn = field.checked;
        } else {
          if (field.value !== "") {
            filledIn = true;
          }
        }
        if (filledIn == false) {
          errorArray.push({
            message:
              "Error: Please fill in the required field: " +
              field.getAttribute("aria-label") + " in " +
              // This gets us the section
              section.getAttribute("aria-label")
          });
          div.classList.add("error");
        }
      } else
      {
        div.classList.remove("error");
        console.log("div does not have required field - skipping");
      }
    });
  });
  

  console.log(errorArray);
  var errorsDiv = document.getElementById("errors");

  errorArray.forEach(function (error) {
    var message = document.createElement("p");
    message.innerHTML = error.message;
    errorsDiv.appendChild(message);
    console.log("Field ID: " + error.fieldId);
  });

  errorsDiv.classList.remove("hidden");
  

  return errorArray;
}

// --------------------------------------------------------
// Function to deal with the date aspect of selecting urgent DoLs of up to 7 days.
// --------------------------------------------------------

// Get the necessary elements
const urgentDaysSelect = document.querySelector('select[name="urgent_days"]');
var urgentDateInput = document.querySelector(
  'input[name="urgent_authorisation_date_end"]'
);

// -----------------------
// Function to add days to a date
function addDays(date, days) {
  const result = new Date(date);
  result.setDate(result.getDate() + days);
  return result;
}

// Event listener for the select element
urgentDaysSelect.addEventListener("change", function () {
  // Get the selected number of days
  const selectedDays = parseInt(this.value);

  // Calculate the urgent authorisation end date
  const today = new Date();
  const endDate = new Date(
    today.getFullYear(),
    today.getMonth(),
    today.getDate() + selectedDays
  );

  // Format the date as "dd/mm/yyyy"
  const formattedEndDate = endDate.toLocaleDateString("en-GB", {
    day: "2-digit",
    month: "2-digit",
    year: "numeric",
  });

  // Update the input field value
  urgentDateInput.value = formattedEndDate;
  document.querySelector("input[name=urgent_authorisation_date_end]").value =
    formattedEndDate;
});

// --------------------------------------------------------
// Function to reset fields other than date.
// --------------------------------------------------------

// add identifier to all fields except those involving date:
// authorisation_date
// dols_request_date
// urgent_authorisation_granted_date

function addDateClass(className) {
  console.log("addClass function called");

  document
    .querySelectorAll(
      '[name="authorisation_date"]',
      '[name="dols_request_date"]',
      '[name="urgent_authorisation_granted_date"]'
    )
    .forEach(function (name) {
      name.classList.add(className);
    });
}

// var resetValues = document.querySelectorAll(.field);
// document.querySelector("input[name=authorisation_date]".addClass(date));
// --------------------------------------------------------
// Sandbox
// --------------------------------------------------------
function hiddenSection() {
  console.log("Function hiddenSection has been called");
  var hiddenSectionArray = [];
  document.querySelectorAll(".hidden").forEach(function (hidden) {
    console.log("Checking hidden section", hidden);
    hiddenSectionArray.push(hidden);
  });
  console.log(hiddenSectionArray);
}

// function resetValue() {
//   console.log("Function resetValue has been called");
//   var fields = document.querySelectorAll(".field:not(.date)");
//   console.log(fields);
//   for (var i = 0; i < fields.length; i++) {
//     fields[i].value = "";
//   }
//   resetDate();
// }
// but the date class is not in the same classList as field.
// need to add a class to all the elements selected by the error search
// then do the same/similar again and see if that works.

function valueCheck() {
  console.log("checking values");
  var valueArray = [];

  document.querySelectorAll(".section").forEach(function (section) {
    console.log("Checking section", section);
    section.querySelectorAll(":scope > div.field").forEach(function (div) {
      console.log("Checking field div for values", div);
      var field = div.querySelector("[value]");

      if (field) {
        console.log("div has a value + ", field.value);
        valueArray.push(field.value);
      } else {
        // These will be checkboxes etc.
        console.log("div does not have a value element - skipping");
      }
    });
  });
}

// can we select for type?

// function checkInputType() {
//   checkboxArray = [];
//   var test = document.querySelectorAll('input[type="checkbox"]');
//   test.forEach(function (checkbox) {
//     item = `<li>${checkbox.value}</li>`;
//     // prints out a list of the checkbox items (Not the checked ones. )All of them.
//     console.log(item);
//   });
// }

// Function expression

const checkTextFields = function () {
  var text = document.querySelectorAll('input[type="text"]');
  text.forEach(function (text) {
    textBoxes = `<li>${text.value}</li>`;
    console.log(textBoxes);
  });
}; // oh, how do you call these?

// resetDate as callback to resetValue

function resetDate() {
  console.log("resetDate function called");
  let today = new Date();
  let gb_date = new Intl.DateTimeFormat("en-GB").format(today);

  // dols authorisation_date
  document.querySelector("input[name=authorisation_date]").value = gb_date;
  // dols_request_date
  document.querySelector("input[name=dols_request_date]").value = gb_date;
  // urgent_authorisation_granted_date
  document.querySelector(
    "input[name=urgent_authorisation_granted_date]"
  ).value = gb_date;
}

function resetValue(callback) {
  console.log("Function resetValue has been called");
  var fields = document.querySelectorAll(".field:not(.date)");
  console.log(fields);
  for (var i = 0; i < fields.length; i++) {
    fields[i].value = "";
  }
  if (typeof callback === "function") {
    callback();
  }
}

// call resetValue() with resetDate() as a callback function
resetValue(resetDate);

// select the button to add event listener
const resetButtonSelect = document.querySelector('button[name="reset_btn"]');
// add event listener and the parameter "click' and the function"
function eventListeners(array, target) {
  // eg array parameter will be inputTextArray
  //target will be 'input[type="text"
  //type will be text]
  array = [];
  let result = document.querySelectorAll(target);
  result.forEach(function (type) {
    array.push(type);
  });
  return array;
}

// function textItemsArray() {
//   const textItemsArray = []; // define resultArray within the function
//   const result = document.querySelectorAll('input[type="text"]');
//   result.forEach(function (textItem) {
//     textItemsArray.push(textItem);
//   });
//   return textItemsArray;
// }

// function resetText(textItemsArray) {}

// // function checkboxArray() {
// //   const checkboxArray = []; // define resultArrayCb within the function
// //   const result = document.querySelectorAll('input[type="checkbox"]');
// //   result.forEach(function (checkbox) {
// //     checkboxArray.push(checkbox);
// //   });
// //   return checkboxArray;
// // }

// function dateArray() {
//   const dateArray = [];
//   result = document.querySelectorAll('input[type="date"]');
//   result.forEach(function (date) {
//     dateArray.push(date);
//   });
//   return dateArray;
// }

// function dropdownArray() {
//   const dropdownArray = [];

//   result = document.querySelectorAll('select[type="dropdown"]');
//   result.forEach(function (dropdown) {
//     dropdownArray.push(dropdown);
//   });
//   return dropdownArray;
// }

// function radioArray() {
//   const radioArray = [];

//   result = document.querySelectorAll('input[type="radio"]');

//   result.forEach(function (radio) {
//     radioArray.push(radio);
//   });
//   return radioArray;
// }

// function phoneArray() {
//   const phoneArray = [];

//   result = document.querySelectorAll('input[type="phone"]');
//   console.log(result);
//   result.forEach(function (phone) {
//     phoneArray.push(phone);
//   });
//   return phoneArray;
// }

// function getAllInputs() {
//   const resultArray = [];
//   textItemsArray().forEach((item) => resultArray.push(item));
//   // checkboxArray().forEach((item) => resultArray.push(item));
//   dateArray().forEach((item) => resultArray.push(item));
//   dropdownArray().forEach((item) => resultArray.push(item));
//   radioArray().forEach((item) => resultArray.push(item));
//   phoneArray().forEach((item) => resultArray.push(item));
//   return resultArray;
// }

// const inputs = getAllInputs();
// console.log(inputs);

// function resetInputs(inputs) {}

//  Highlight the errors on the document.
function displayErrors(errors) {
  var inputs = document.getElementById("input");
  for (i = 0; i < inputs.length; i++) {
    var input = inputs[i];
    if (errors.indexOf(input.name) >= 0) {
      input.classList.remove();
      input.classList.add("error");
    }
  }
}

const picturesGridEvent = document.querySelectorAll(".img-wrapper");

ptDetailsButton.addEventListener("click", (e) => {
  console.log("ptDetailsButton has been clicked");
  picturesGridEvent.forEach((element) => {
    element.classList.add("hidden");
  });
});







