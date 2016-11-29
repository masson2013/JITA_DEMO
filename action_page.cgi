#!/usr/bin/python
import cgi, os, sys, commands
print "Content-type: text/html\n";
print "<html><body bgcolor=#E4E4CC>\n";
print "<p>Thank you for using hThreads!\n</p>";
form = cgi.FieldStorage();
print "<p>form:</p><p>%s</p>" % form
# A nested FieldStorage instance holds the file
fileitem = form['name']
print "<p>Name:</p><p>%s</p>" % fileitem
fileitem = form['email']
print "<p>Email:</p><p>%s</p>" % fileitem
# Test if the file was uploaded
#print "<p>fileitem.filename:</p><p>%s</p>" % fileitem.filename
# if fileitem.filename:
#    #print "<p>TRUE!</p>"
#    # strip leading path from file name to avoid directory traversal attacks
#    fn = os.path.basename(fileitem.filename)
#    #print "<p>fn:</p><p>%s</p>" % fn
#    PATH = os.getcwd();
#    #print "<p>PATH:</p><p>%s</p>" % PATH
#    open('/var/www/local/upload/'+fn, 'wb').write(fileitem.file.read())
#    message = 'The file "' + fileitem.filename + '" was uploaded successfully'
#    print "<p>%s</p>" % message
# else:
#    print "<p>NOT true!</p>"
#    message = 'No file was uploaded'
#    print "<p>%s</p>" % message
