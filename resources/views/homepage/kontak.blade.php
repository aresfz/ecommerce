@extends('layouts.template')
@section('content')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  line-height: 1.6;
}

header, footer {
  color: #000;
  text-align: center;
  padding: 20px 0;
}

.contact-container {
  display: flex;
  justify-content: space-around;
  padding: 20px;
}

.contact-info, .contact-form {
  flex: 1;
  max-width: 400px;
}

.contact-form form {
  display: flex;
  flex-direction: column;
}

.contact-form label, .contact-form input, .contact-form textarea, .contact-form button {
  margin-bottom: 15px;
}

.contact-form input, .contact-form textarea {
  padding: 8px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

.contact-form button {
  padding: 10px;
  background-color: #7fd7eb;
  color: #000;
  border: none;
  cursor: pointer;
}

.contact-form button:hover {
  background-color: #555;
}
</style>
</head>
<body>

<header>
    <h1>Contact Us</h1>
  </header>

  <main class="contact-container">
    <section class="contact-info">
      <h2>Our Contact Information</h2>
      <p>Email: dagadu@djokdja.com</p>
      <p>Phone: +62 274 375591</p>
      <p>Address: Jl. Gedongkuning Selatan 128 55171 Yogyakarta Di Yogyakarta</p>
    </section>

    <section class="contact-form">
      <h2>Get In Touch</h2>
      <form action="#" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit">Submit</button>
      </form>
    </section>
  </main>


</body>
</html>


@endsection
