#include<iostream>
#include<string>
using namespace std;
int main()
{
	string a, tmp;
	getline(cin,a);
	tmp = a;
	for (int i = 0; i < tmp.length(); i++)
	{
		tmp[i] = a[tmp.length() - 1 - i];
	}
	char ans = (a == tmp ? 'Y' : 'N');
	cout << ans << endl;
	//cin.get();
	//cin.get();
	return 0;
}