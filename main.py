
import os
from PIL import Image


ORIGINAL_IMG_PATH = "images" # 参照元ディレクトリ
# pass the image as command line argument
image_path = os.listdir(ORIGINAL_IMG_PATH)

for i in image_path:
  img = Image.open(f"images/{i}")

# resize the image
width, height = img.size
aspect_ratio = height/width
new_width = 100
new_height = aspect_ratio * new_width * 0.6
img = img.resize((new_width, int(new_height)))
# new size of image
# print(img.size)

# convert image to greyscale format
img = img.convert('L')

pixels = img.getdata()

# replace each pixel with a character from array
chars = ["靡","腐","陰","猥","淫","卑","ま","ち","ん","こ",""]
new_pixels = [chars[pixel//30] for pixel in pixels]
new_pixels = ''.join(new_pixels)

# split string of chars into multiple strings of length equal to new width and create a list
new_pixels_count = len(new_pixels)
ascii_image = [new_pixels[index:index + new_width] for index in range(0, new_pixels_count, new_width)]
ascii_image_txt = "\n".join(ascii_image)
ascii_image = "<br>".join(ascii_image)
print(ascii_image)

# write to a text file.
with open("images/ascii_image.txt", "w") as f:
 f.write(ascii_image_txt)