function displayCurrentDateTime() {
  // Get current date and time
  const currentDate = new Date();

  // Get individual components of the date and time
  const year = currentDate.getFullYear();
  const month = currentDate.getMonth() + 1; // Month starts from 0
  const day = currentDate.getDate();
  const hours = currentDate.getHours();
  const minutes = currentDate.getMinutes();
  const seconds = currentDate.getSeconds();

  // Format the current date and time
  const formattedDateTime = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;

  // Display the formatted date and time on the page
  document.getElementById("datetime").textContent = formattedDateTime;
}

// Update the time every second (1000 milliseconds)
setInterval(displayCurrentDateTime, 1000);
