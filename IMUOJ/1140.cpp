#include<iostream>
#include<string>
using namespace std;
int main()
{
	string x[50];
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> x[i];
	}
	for (int i = 0; i < n; i++)
	{
		int f1 = 0, f2 = 0, f3 = 0, f4 = 0;
		if (x[i].length()>=8&&x[i].length()<=16)
		{
			for (int j = 0; j < x[i].length(); j++)
			{
				if (x[i][j] >= 'A'&&x[i][j] <= 'Z') f1 = 1;
				else if (x[i][j] >= 'a'&&x[i][j] <= 'z') f2 = 1;
				else if (x[i][j] >= '0'&&x[i][j] <= '9') f3 = 1;
				else if(x[i][j]=='~'|| x[i][j] == '!' || x[i][j] == '@' || x[i][j] == '#' || x[i][j] == '$' || x[i][j] == '%' || x[i][j] == '^' )f4 = 1;
			}
			if (f1 + f2 + f3 + f4 >= 3)cout << "YES" << endl;
			else cout << "NO" << endl;
		}else
		{
			cout << "NO" << endl;
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}