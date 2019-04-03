#include<iostream>
#include<string>
using namespace std;
int main()
{
	string a;
	getline(cin, a);
	for (int i = 0;i<a.size();i++)
	{
		if (a[i] >= 'a'&&a[i] <= 'z')
		{
			if (a[i] == 'z')
				cout << "a";
			if (a[i]<'z'&&a[i] >= 'a')
				cout << char(int(a[i]) + 1);
		}
		else
			cout << a[i];
	}
	//cin.get();
	//cin.get();
	return 0;
}
