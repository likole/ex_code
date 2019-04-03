#include<iostream>
#include<string>
using namespace std;
int main()
{
	string in;
	char out[50];
	int index = 0;
	getline(cin, in);
	for (int i = 0; i < in.length(); i++)
	{
		switch (in[i])
		{
		case 'a':case 'e':case 'i':case 'u':case 'o':
			out[index] = in[i];
			index++;
			break;
		}
	}
	for (int i = 0; i < index; i++)
	{
		cout << out[i];
	}
	cout << endl;
	//cin.get();
	//cin.get();
	return 0;
}