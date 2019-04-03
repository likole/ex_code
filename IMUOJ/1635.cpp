#include<iostream>
#include<string>
using namespace std;
int main()
{
	int n;
	cin >> n;
	cin.get();
	for (int  i = 0; i < n; i++)
	{
		string x;
		int count = 0;
		getline(cin, x);
		for (int i = 0; i < x.length(); i++)
		{
			if (x[i] >= 'a'&&x[i] <= 'z')count++;
			else break;
		}
		cout << count << endl;
	}
	return 0;
}