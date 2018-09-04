import os, sys
from PIL import Image

# size = 128, 128
# size = 1440, 2560
size = 288, 512
pwd = os.getcwd()
for infile in os.listdir(pwd):
# for infile in sys.argv[1:]:
    # outfile = os.path.splitext(infile)[0] + ".jpg"
    outfile = "../"+ infile.lower();
    if infile != outfile:
        try:
            im = Image.open(infile)
            angle = -90
            rot = im.rotate( angle, expand=1 )
            # im.thumbnail(size, Image.ANTIALIAS)
            rot.save(outfile, "JPEG")
        except IOError:
            print "cannot create thumbnail for '%s'" % infile