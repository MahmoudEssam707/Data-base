from PyQt5.QtWidgets import QApplication, QWidget, QLabel, QLineEdit, QPushButton, QVBoxLayout

def login():
    email = email_entry.text()
    password = password_entry.text()
    # Add your login logic here

def signup():
    email = email_entry.text()
    password = password_entry.text()
    # Add your signup logic here

app = QApplication([])
window = QWidget()
window.setWindowTitle("Facebook Login/Signup")

layout = QVBoxLayout()

# Facebook logo
logo_label = QLabel("Facebook")
logo_label.setStyleSheet("font-size: 24px; font-weight: bold;")

# Email and Password Entry
email_label = QLabel("Email:")
layout.addWidget(email_label)

email_entry = QLineEdit()
layout.addWidget(email_entry)

password_label = QLabel("Password:")
layout.addWidget(password_label)

password_entry = QLineEdit()
password_entry.setEchoMode(QLineEdit.Password)
layout.addWidget(password_entry)

# Login and Signup Buttons
login_button = QPushButton("Log In")
login_button.clicked.connect(login)
layout.addWidget(login_button)

signup_button = QPushButton("Sign Up")
signup_button.clicked.connect(signup)
layout.addWidget(signup_button)

window.setLayout(layout)
window.show()

app.exec()
