# Health Buddy

Health Buddy is an ecommerce web application for selling the Arduino-based posture monitoring device, the "Arduino Spine Saviour." This device helps users improve their posture and overall health. The platform allows users to register, log in, and purchase the device online.

## Features
- User registration and login system
- Ecommerce landing page for the posture monitoring device
- Responsive and modern UI
- Dockerized environment for easy deployment
- MySQL database integration

## Project Structure
```
docker-compose.yml
Dockerfile
app/
  connect.php
  homepage.php
  index.php
  my-site.conf
  register.php
  script.js
  signup.php
  style.css
  styles.css
```

## Getting Started

### Prerequisites
- Docker
- Docker Compose

### Setup
1. Clone the repository.
2. Run `docker-compose up --build` in the project root directory.
3. Access the application at [http://localhost](http://localhost).

### Environment Variables
The application uses the following environment variables (see `docker-compose.yml`):
- `MYSQL_DB_CONNECTION`
- `MYSQL_DB_NAME`
- `MYSQL_USER`
- `MYSQL_PASSWORD`

## License
This project is for educational purposes.
