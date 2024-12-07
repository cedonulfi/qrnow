# QRNow

**QRNow** is a simple yet powerful PHP and JavaScript application to generate and read QR codes. Effortlessly create custom QR codes and scan them using your device's camera. Perfect for events, payments, inventory management, and more.

## Features

- **Generate QR Code**: Create QR codes from custom text or URLs.
- **Scan QR Code**: Use your device's camera to scan and read QR codes.

## Installation

1. Clone the repository:
    ```sh
    git clone https://github.com/cedonulfi/qrnow.git
    ```

2. Navigate to the project directory:
    ```sh
    cd qrnow
    ```

3. Download the `phpqrcode` library:
    - Visit [phpqrcode](https://sourceforge.net/projects/phpqrcode/) and download the library.
    - Extract the contents and place the `phpqrcode` folder in the root directory of your project.

4. Make sure you have PHP installed and set up a local server.

## Usage

1. **Generate QR Code**:
    - Open `create.php` in your web browser.
    - Enter text or URL in the provided input field.
    - Click on the "Generate QR Code" button to create and display the QR code.

2. **Scan QR Code**:
    - Open `scan.html` in your web browser.
    - Use your device's camera to scan the QR code.
    - The content of the QR code will be displayed in an alert.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.
