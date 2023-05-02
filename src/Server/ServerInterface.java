package Server;

public interface ServerInterface {
	public boolean startServer( int port, String sharedKey ); //Start server and wait for client connections
	public void endConnection(); //End connection
	public void closeServer(); //shutdown server
	public boolean sendMessage( String s ); //sends a message
	public void acceptConnection(); //blocking call to accept connections to server.
	public void receiveMessages();
}
