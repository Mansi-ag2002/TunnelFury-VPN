package Client;

public interface ClientInterface {
	public boolean startClient( String host, int port, String sharedKey ); //Start client and do handshake. Expected call GUIInterface.connectionReady()
	public void endConnection(); //End connection
	public boolean sendMessage( String s ); //sends a message
	public void receiveMessages(); //
}
