#include<iostream>
#include<string>
using namespace std;
int main()
{
	string x;
	while (getline(cin, x))
	{
		int flag = 0;
		for (int i = 0; i < x.length(); i++)
		{
			if (i < x.length() - 1) 
			{
				if (x[i] == '/'&&x[i + 1] == '/')
				{
					if (i == 0)flag = 1;
					break;
				}
			}
			cout << x[i];
		}
		if(flag==0)cout << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}