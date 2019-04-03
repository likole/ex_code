#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	float x, y;
	char op;
	for (int i = 0; i < 4; i++)
	{
		float ans;
		cin >> x >> op >> y;
		switch (op)
		{
		case '+':
			ans = x + y;
			break;
		case '-':
			ans = x - y;
			break;
		case '*':
			ans = x*y;
			break;
		default:
			ans = x / y;
			break;
		}
		cout << fixed << setprecision(2) << ans << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}