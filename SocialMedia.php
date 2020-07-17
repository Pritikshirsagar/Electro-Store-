 
 <?php
	Uri imgUri = Uri.parse(pictureFile.getAbsolutePath());
    Intent whatsappIntent = new Intent(Intent.ACTION_SEND);
    whatsappIntent.setType("text/plain");
    whatsappIntent.setPackage("com.whatsapp");
    whatsappIntent.putExtra(Intent.EXTRA_TEXT, "The text you wanted to share");
    whatsappIntent.putExtra(Intent.EXTRA_STREAM, imgUri);
    whatsappIntent.setType("images/jpg");
    whatsappIntent.addFlags(Intent.FLAG_GRANT_READ_URI_PERMISSION);

    try {
        activity.startActivity(whatsappIntent);
    } catch (android.content.ActivityNotFoundException ex) {
        ToastHelper.MakeShortText("Whatsapp have not been installed.");
    }
	?>