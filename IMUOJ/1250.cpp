#include<iostream>
using namespace std;
int main()
{
	int ans[200];
	for (int i = 0; i < 200; i++)
	{
		ans[i] = 0;
	}
	while (cin.peek() != '#')
	{
		char c = cin.get();
		ans[c]++;
	}
	char a = 'a';
	for (int i = 0; i < 26; i++)
	{
		cout << a << " " << ans[97 + i] << endl;
		a++;
	}
	return 0;
}