package com;
import java.util.Base64;
public class Helpers {
	public static String ByteToString(byte[] arr)
	{
		String s = "";
		for(int i = 0; i < arr.length; i++ )
		{
			s += ((int)arr[i]) + ", ";
		}
		return s;
		//return DatatypeConverter.printHexBinary(arr);
	}
}
