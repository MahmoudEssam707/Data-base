from tkinter import *
from PIL import ImageTk, Image

root = Tk()
root.title("Facebook")
root.geometry("800x600")

# Header
header_frame = Frame(root, bg="#3b5998", height=50)
header_frame.pack(fill=X)

logo_image = ImageTk.PhotoImage(Image.open("Facebook-logo.png").resize((30, 30)))
logo_label = Label(header_frame, image=logo_image, bg="#3b5998")
logo_label.pack(side=LEFT, padx=10, pady=5)

search_entry = Entry(header_frame, font=("Helvetica", 12), bg="#e4e6eb", fg="#8a8d91", relief=FLAT)
search_entry.insert(0, "Search")
search_entry.pack(side=LEFT, padx=10, pady=5)

# Sidebar
sidebar_frame = Frame(root, bg="#f0f2f5", width=200)
sidebar_frame.pack(side=LEFT, fill=Y)

profile_image = ImageTk.PhotoImage(Image.open("profile_pic.png").resize((150, 150)))
profile_label = Label(sidebar_frame, image=profile_image, bg="#f0f2f5")
profile_label.pack(pady=20)

home_button = Button(sidebar_frame, text="Home", font=("Helvetica", 12, "bold"), relief=FLAT)
home_button.pack(pady=10)

friends_button = Button(sidebar_frame, text="Friends", font=("Helvetica", 12, "bold"), relief=FLAT)
friends_button.pack(pady=10)

messages_button = Button(sidebar_frame, text="Messages", font=("Helvetica", 12, "bold"), relief=FLAT)
messages_button.pack(pady=10)

# Main Content
content_frame = Frame(root, bg="#ffffff")
content_frame.pack(side=LEFT, fill=BOTH, expand=True)

# News Feed
news_feed_label = Label(content_frame, text="News Feed", font=("Helvetica", 16, "bold"), bg="#ffffff")
news_feed_label.pack(pady=20)

# Footer
footer_frame = Frame(root, bg="#f0f2f5", height=50)
footer_frame.pack(side=BOTTOM, fill=X)

status_label = Label(footer_frame, text="© 2023 Facebook", font=("Helvetica", 12), bg="#f0f2f5")
status_label.pack(pady=10)

root.mainloop()
